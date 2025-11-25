<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\log;

class ManageItem extends Controller
{
    public function getItemPage()
    {
        return view('BackendPages.ManageItem.CreateItem');
    }

    public function getItemListPage()
    {
        return view('BackendPages.ManageItem.ItemList');
    }

    public function itemUpdatePage($id)
    {
        return view('BackendPages.ManageItem.EditItem', ['item_id' => $id]);
    }

    public function getItemDetailPage($id)
    {
        return view('BackendPages.ManageItem.itemView', ['item_id' => $id]);
    }

    public function SubCategoryList($id)
    {
        $subCategories = DB::table('child_category')->where('cat_id', $id)->get();
        return response()->json(['data' => $subCategories], 200);
    }

    public function createItem(Request $request)
    {
        Log::info('Received request data:', $request->all());

        $request->validate([
            'cat_id' => 'required|exists:cat_master,id',
            'sub_cat_id' => 'required|exists:child_category,id',
            'item_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'item_type' => 'required|in:veg,non-veg',
            'item_image' => 'nullable|image|mimes:jpg,jpeg,png',
        ], [
            'cat_id.required' => 'Please select a main category.',
            'sub_cat_id.required' => 'Please select a sub-category.',
            'item_name.required' => 'Item name is required.',
            'price.required' => 'Item price is required.',
            'item_type.required' => 'Please select an item type.',
            'item_image.image' => 'Uploaded file must be an image.',
        ]);

        // Image Upload
        $imagePath = null;
        if ($request->hasFile('item_image')) {
            $imagePath = $request->file('item_image')->store('items', 'public');
        }

        // Create Item
        $item = Item::create([
            'cat_id' => $request->cat_id,
            'sub_cat_id' => $request->sub_cat_id,
            'item_name' => $request->item_name,
            'price' => $request->price,
            'item_type' => $request->item_type,
            'item_image' => $imagePath,
            'status' => 1, // Default active
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Item created successfully',
            'item' => $item
        ]);
    }

    public function getItemList()
    {
        return DB::table('items')->get();
    }

    public function itemDetail($id)
    {
        $item = DB::table('items')
            ->join('cat_master', 'items.cat_id', '=', 'cat_master.id')
            ->join('child_category', 'items.sub_cat_id', '=', 'child_category.id')
            ->select(
                'items.*',
                'cat_master.name as category_name',
                'child_category.sub_cat_name as sub_category_name'
            )
            ->where('items.id', $id)
            ->first();

        return response()->json($item);
    }

    public function getItems($id)
    {
        $items = Item::where('sub_cat_id', $id)->get();
        return response()->json($items);
    }


    public function updateItem(Request $request, $id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['status' => 404, 'message' => 'Item not found']);
        }

        $item->update($request->only(['cat_id', 'sub_cat_id', 'item_name', 'price', 'item_type']));

        if ($request->hasFile('item_image')) {
            $imagePath = $request->file('item_image')->store('items', 'public');
            $item->update(['item_image' => $imagePath]);
        }

        return response()->json(['status' => 200, 'message' => 'Item updated successfully']);
    }

    public function deleteItem($id)
    {
        $item = DB::table('items')->where('id', $id)->first();

        if (!$item) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        // Perform the delete operation
        $deleted = DB::table('items')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['success' => true, 'message' => 'Item deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Failed to delete item'], 500);
    }

    public function FetchTitle($id)
    {
        $data = DB::table('child_category')
            ->join('cat_master', 'child_category.cat_id', '=', 'cat_master.id') // Join main category table
            ->where('child_category.id', $id) // Filter by sub-category ID
            ->select('child_category.sub_cat_name', 'cat_master.name as category_name') // Select required fields
            ->first(); // Fetch a single record

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Sub-category not found'], 404);
        }
    }
}
