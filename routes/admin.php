<?php

use App\Http\Controllers\Admin\Api\CategoryController as ApiCategoryController;
use App\Http\Controllers\Admin\{
    CategoryController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('categories', CategoryController::class);

Route::prefix('api')->name('api.')->group(function () {
    Route::apiResources([
        'categories' => ApiCategoryController::class,
    ]);
    // Route::get('category', [CategoryController::class, 'api'])->name('category');
});
