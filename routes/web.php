<?php

use App\Http\Controllers\ManageItem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/Category/{id}', [PageController::class, 'CategoryPage']);
    Route::get('/Item/{id}', [PageController::class, 'itemPage']);
    Route::get('/Cart', [PageController::class, 'CartPage']);
    Route::get('/About', [PageController::class, 'aboutPage']);
    Route::get('/Team', [PageController::class, 'teamPage']);
    Route::get('/Testimonial', [PageController::class, 'testimonialPage']);
    Route::get('/Events', [PageController::class, 'eventPage']);
    Route::get('/Contact', [PageController::class, 'contactPage']);
    Route::get('/Booking', [PageController::class, 'bookingPage']);
    Route::get('/Orders', [PageController::class, 'OrderPage']);
    Route::get('/Service', [PageController::class, 'ServicePage']);
    Route::get('/Book', [PageController::class, 'BookPage']);
    Route::get('/OrderHistory', [PageController::class, 'OrderHistoryPage']);
    Route::get('/Success', [PageController::class, 'success']);
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/inde', [PageController::class, 'AdminIndex'])->name('AdminIndex');


Route::get('/get-categories', [CategoryController::class, 'getCategories'])->name('getCategories');
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

// ManageItem
Route::get('/Create-Item/Page', [ManageItem::class, 'getItemPage'])->name('getItemPage');
Route::get('/Item-List/Page', [ManageItem::class, 'getItemListPage'])->name('getItemListPage');
Route::get('/Sub-Category/{id}', [ManageItem::class, 'SubCategoryList'])->name('SubCategoryList');
Route::post('/items/create', [ManageItem::class, 'createItem']);
Route::get('/Item/List', [ManageItem::class, 'getItemList'])->name('getItemList');
Route::get('/Item/Detail/{id}', [ManageItem::class, 'itemDetail'])->name('itemDetail');
Route::get('/Item/Update/{id}', [ManageItem::class, 'itemUpdatePage'])->name('itemUpdatePage');
Route::put('/Update/Item/{id}', [ManageItem::class, 'updateItem'])->name('updateItem');
Route::delete('/Delete/Item/{id}', [ManageItem::class, 'deleteItem'])->name('deleteItem');

//Book
