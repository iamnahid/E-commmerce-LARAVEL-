<?php

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

// Product Routes
Route::get('/', 'PagesController@index')->name('Home');
Route::get('/contact', 'PagesController@contact')->name('Contact');

// Product Routes
Route::get('/product', 'ProductController@products')->name('Product');
Route::get('/product/{slug}', 'ProductController@show')->name('Product.show');
Route::get('/search', 'PagesController@search')->name('search');

// Admin Routes
Route::group(['prefix' => 'admin'], function () {

    
    Route::get('/', 'AdminPagesController@index')->name('admin.index');
    // Product

    // CREATE PRODUCTS
    Route::get('/product/create', 'AdminPagesController@create')->name('admin.product.create'); 
    Route::post('/product/create', 'AdminPagesController@store')->name('admin.product.store');

    // SHOWING PRODUCTS
    Route::get('/product/edit', 'AdminPagesController@edit')->name('admin.product.edit'); 

    // EDIT PRODUCTS
    Route::get('/product/store_edit/{id}', 'AdminPagesController@store_edit')->name('admin.product.store_edit');
    Route::post('/product/store_edit/{id}', 'AdminPagesController@edit_update')->name('admin.product.edit_update');

    // DELETE PRODUCTS
    Route::get('/product/delete/{id}', 'AdminPagesController@delete')->name('admin.product.delete');



    // Categories
    // CREATE CATEGORIES
    Route::get('/categories/create', 'CategoryController@create')->name('admin.categories.create'); 
    Route::post('/categories/create', 'CategoryController@store')->name('admin.categories.store');

    Route::get('/categories/allCategories', 'CategoryController@index')->name('admin.categories.allCategories');

    Route::get('/categories/editCategory/{id}', 'CategoryController@edit_Category')->name('admin.categories.store_category');

    Route::post('/categories/editCategory/{id}', 'CategoryController@update_category')->name('admin.categories.update_category');

    Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('admin.categories.delete');

    // Categories
    // CREATE CATEGORIES
    Route::get('/brands/create', 'BrandController@create')->name('admin.brands.create'); 
    Route::post('/brands/create', 'BrandController@store')->name('admin.brands.store');

    Route::get('/brands/allCategories', 'BrandController@index')->name('admin.brands.allBrands');

    Route::get('/brands/editCategory/{id}', 'BrandController@edit_Brand')->name('admin.brands.store_brand');

    Route::post('/brands/editCategory/{id}', 'BrandController@update_brand')->name('admin.brands.update_brand');

    Route::get('/brands/delete/{id}', 'BrandController@delete')->name('admin.brands.delete');
});

