<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function MainCategoryPage()
    {
        return view('BackendPages.category');
    }

    public function createCategory(Request $request)
    {
        $catdata = $request->validate([
            'category_name' => 'required|string|max:255',  // Name is now required
        ]);

        // Add default values for missing columns
        DB::table('cat_master')->insert([
            'name' => $catdata['category_name'],
            'position' => $request->position,  // position
            'status' => 1,  // Default status (1 = active)
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Main Category created successfully'
        ]);
    }

    public function getMainCategoryList()
    {
        return DB::table('cat_master')
            ->get();
    }

    public function categoryDetail($id)
    {
        return DB::table('cat_master')
            ->where('id', $id)
            ->first();
    }

    public function updateCategoryName(Request $request)
    {
        $id  = $request->input('id');

        $updates = DB::table('cat_master')->where('id', $id)->first();
        if (! $updates) {
            // Handle the case where the update doesn't exist
            return redirect()->back()->with('error', 'Category not found');
        }

        DB::table('cat_master')->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'created_at' => $updates->created_at,
                'updated_at' => Carbon::now('Asia/Kolkata')
            ]);

        return  response()->json([
            'status' => 'success',
            'message' => 'Category updated Successfully'
        ], 200);
    }

    public function updateCategoryPosition(Request $request)
    {
        Log::info('Received request for updateCategoryPosition:', $request->all());

        $updated = DB::table('cat_master') // Replace with your actual table name
            ->where('id', $request->id)
            ->update(['position' => $request->position]);

        if ($updated) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 500);
    }

    public function updateCategoryStatus(Request $request)
    {
        // Validate request
        $request->validate([
            'id' => 'required|integer|exists:cat_master,id',
            'status' => 'required|integer|in:0,1',
        ]);

        // Update status in the database
        $updated = DB::table('cat_master') // Replace 'cat_master' with your actual table name
            ->where('id', $request->id)
            ->update(['status' => $request->status]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
        }
        return response()->json(['success' => false, 'message' => 'Failed to update status.'], 500);
    }

    public function getMainCategoryTitle($id)
    {
        return DB::table('cat_master')->where('id', $id)->first();
    }

    public function deleteCategory($id)
    {
        $category = DB::table('cat_master')->where('id', $id)->first();

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found'], 404);
        }

        // Perform the delete operation
        $deleted = DB::table('cat_master')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['success' => true, 'message' => 'Category deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to delete category'], 500);
    }

    public function getCategories()
    {
        $categories = DB::table('cat_master')->get();
        return response()->json($categories);
    }

    // Fetch Subcategories based on Main Category ID using DB::query()
    public function getSubCategories($cat_id)
    {
        $subcategories = DB::table('child_category')->where('cat_id', $cat_id)->limit(12)->get();
        return response()->json($subcategories);
    }
}
