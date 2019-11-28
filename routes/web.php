<?php

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

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

// Category Routes
Route::get('/admin/category/add', 'CategoryController@addCategory')->name('addcategory');
Route::post('/admin/category/add', 'CategoryController@saveAddCategory')->name('addcategory');
Route::get('/admin/category/edit/{category}', 'CategoryController@editCategory')->name('editcategory');
Route::get('/admin/category/delete/{category}', 'CategoryController@deleteCategory')->name('deletecategory');
Route::post('/admin/category/edit/{category}', 'CategoryController@saveEditCategory')->name('saveeditcategory');

// Congress Routes
Route::get('/admin/congress/add', 'CongressController@addCongress')->name('addcongress');
Route::get('/admin/congress/add', 'CongressController@addCongress')->name('addcongress');
Route::post('/admin/congress/add', 'CongressController@saveAddCongress')->name('addcongress');
Route::get('/admin/congress/edit/{congress}', 'CongressController@editCongress')->name('editcongress');
Route::get('/admin/congress/delete/{congress}', 'CongressController@deleteCongress')->name('deletecongress');
Route::post('/admin/congress/edit/{congress}', 'CongressController@saveEditCongress')->name('saveeditcongress');
Route::get('/admin/congress/view/{congress}', 'CongressController@viewMedia')->name('viewmedia');

// Media Routes
Route::get('/admin/media/add/{congress?}', 'MediaController@addMedia')->name('addmedia');
Route::post('/admin/media/add', 'MediaController@saveAddMedia')->name('addmedia');
Route::get('/admin/media/edit/{media}', 'MediaController@editMedia')->name('editmedia');
Route::get('/admin/media/delete/{media}', 'MediaController@deleteMedia')->name('deletemedia');
Route::post('/admin/media/edit/{media}', 'MediaController@saveEditMedia')->name('saveeditmedia');

// Frontend Routes
Route::get('/', 'HomeController@index')->name('index');
Route::get('/category/{category}', 'HomeController@viewCategory')->name('viewcategory');
Route::get('/congress/{congress}/{year?}', 'HomeController@viewCongress')->name('viewcongress');
