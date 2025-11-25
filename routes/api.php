<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ManageItem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get-categories', [CategoryController::class, 'getCategories'])->name('api.getCategories');
Route::get('/get-subcategories/{id}', [CategoryController::class, 'getSubCategories'])->name('getSubCategories');
Route::get('/Main-Category', [CategoryController::class, 'MainCategoryPage'])->name('MainCategoryPage');
Route::get('/Main-Category/List', [CategoryController::class, 'getMainCategoryList'])->name('getMainCategoryList');
Route::post('/Main-Category/Create', [CategoryController::class, 'createCategory'])->name('createCategory');
Route::get('/Main-Category/Detail/{id}', [CategoryController::class, 'categoryDetail'])->name('categoryDetail');
Route::post('/Category/update-position', [CategoryController::class, 'updateCategoryPosition']);
Route::post('/Category/update-status', [CategoryController::class, 'updateCategoryStatus']);
Route::put('/Update-Category', [CategoryController::class, 'updateCategoryName']);
Route::delete('/Category/delete/{id}', [CategoryController::class, 'deleteCategory']);

// Sub Category
Route::get('/Sub-Category', [SubCategoryController::class, 'SubCategoryPage'])->name('SubCategoryPage');
Route::get('/Main-Category/StatuswiseList', [SubCategoryController::class, 'MainCategoryList'])->name('MainCategoryList');
Route::post('/Sub-Category/Create', [SubCategoryController::class, 'subCategoryCreate'])->name('subCategoryCreate');
Route::get('/Sub-Category/List', [SubCategoryController::class, 'subCategoryList'])->name('subCategoryList');
Route::get('/Sub-Category/Detail/{id}', [SubCategoryController::class, 'subCategoryDetail'])->name('subCategoryDetail');
Route::post('/Sub-Category/update-status', [SubCategoryController::class, 'updateSubCategoryStatus']);
Route::put('/Update-Sub-Category', [SubCategoryController::class, 'updateSubCategory']);
Route::delete('/Sub-Category/delete/{id}', [SubCategoryController::class, 'deleteSubCategory']);
Route::get('/fetch-child-categories/{id}', [SubCategoryController::class, 'FetchSubCategoryId']);

// ManageItem
Route::get('/Create-Item/Page', [ManageItem::class, 'getItemPage'])->name('getItemPage');
Route::get('/Item-List/Page', [ManageItem::class, 'getItemListPage'])->name('getItemListPage');
Route::get('/Sub-Category/{id}', [ManageItem::class, 'SubCategoryList'])->name('SubCategoryList');
Route::post('/items/create', [ManageItem::class, 'createItem']);
Route::get('/Item/List', [ManageItem::class, 'getItemList'])->name('getItemList');
Route::get('/Item/Detail/{id}', [ManageItem::class, 'itemDetail'])->name('itemDetail');
Route::get('/Main-Category/items/{id}', [ManageItem::class, 'getItems'])->name('getItems');
Route::get('/Main-Category/Sub-category/{id}', [ManageItem::class, 'FetchTitle'])->name('FetchTitle');
Route::get('/Item/Update/{id}', [ManageItem::class, 'itemUpdatePage'])->name('itemUpdatePage');
Route::put('/Update/Item/{id}', [ManageItem::class, 'updateItem'])->name('updateItem');
Route::delete('/Delete/Item/{id}', [ManageItem::class, 'deleteItem'])->name('deleteItem');

Route::post('/place-order', [OrderController::class, 'placeOrder']);