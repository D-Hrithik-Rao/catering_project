<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function SubCategoryPage()
    {
        return view('BackendPages.subCategory');
    }

    public function MainCategoryList()
    {
        return DB::table('cat_master')
            ->select('id', 'name')
            ->where('status', '1')
            ->get();
    }


    public function subCategoryCreate(Request $request)
    {
        $catdata = $request->validate([
            'cat_id' => 'required',
            'sub_cat_name' => 'required|string|max:255',
            'cat_image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Validate image upload
        ]);

        $imagePath = null;
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image');
            $imagePath = $file->store('category_images', 'public'); // Store in storage/app/public/category_images
        }

        // Insert into the database
        DB::table('child_category')->insert([
            'cat_id' => $catdata['cat_id'],
            'sub_cat_name' => $catdata['sub_cat_name'],
            'cat_image' => $imagePath, // Store the file path in DB
            'status' => 1, // Default status (1 = active)
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Sub Category created successfully',
        ]);
    }

    public function subCategoryList()
    {
        $subCategories = DB::table('child_category as cc')
            ->join('cat_master as cm', 'cc.cat_id', '=', 'cm.id') // Join on cat_id
            ->select(
                'cc.*',
                'cm.*' // Assuming `cat_master` has a column `cat_name`
            )
            ->get();

        return response()->json($subCategories);
    }

    public function updateSubCategoryStatus(Request $request)
    {

        $request->validate([
            'id' => 'required|integer|exists:child_category,id',
            'status' => 'required|integer|in:0,1',
        ]);

        // Update status in the database
        $updated = DB::table('child_category')
            ->where('id', $request->id)
            ->update(['status' => $request->status]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
        }
        return response()->json(['success' => false, 'message' => 'Failed to update status.'], 500);
    }

    public function subCategoryDetail($id)
    {
        return DB::table('child_category')
            ->where('id', $id)
            ->first();
    }

    public function updateSubCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:child_category,id',
            'sub_cat_name' => 'required|string|max:255',
            'cat_image' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        $subCategory = DB::table('child_category')->where('id', $request->id)->first();

        if (!$subCategory) {
            return response()->json(['message' => 'Sub Category not found'], 404);
        }

        $imagePath = $subCategory->cat_image; // Keep old image

        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image');
            $imagePath = $file->store('category_images', 'public'); // Store in storage/app/public/category_images

            // Delete old image if it exists
            if ($subCategory->cat_image) {
                Storage::disk('public')->delete($subCategory->cat_image);
            }
        }

        // Update Database
        DB::table('child_category')->where('id', $request->id)->update([
            'sub_cat_name' => $request->sub_cat_name,
            'cat_image' => $imagePath,
            'updated_at' => now(),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Sub Category updated successfully',
        ]);
    }

    public function deleteSubCategory($id)
    {
        $category = DB::table('child_category')->where('id', $id)->first();

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found'], 404);
        }

        // Perform the delete operation
        $deleted = DB::table('child_category')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['success' => true, 'message' => 'SubCategory deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to delete category'], 500);
    }

    public function FetchSubCategoryId($subCategoryId)
    {
        // Find the cat_id of the given child_category ID
        $category = DB::table('child_category')
            ->where('id', $subCategoryId)
            ->select('cat_id')
            ->first();

        // If no matching category is found, return an error
        if (!$category) {
            return response()->json(['error' => 'Sub-category not found'], 404);
        }

        // Fetch all child categories that belong to the same cat_id
        $childCategories = DB::table('child_category')
            ->where('cat_id', $category->cat_id)
            ->get();

        return response()->json($childCategories);
    }
}
