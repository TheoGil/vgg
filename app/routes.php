<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// HOMEPAGE
Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/catalog', 'CatalogController@showAllProducts');
Route::get('/catalog/{tag}', 'CatalogController@showProductsTaggedAs');

//          url                  alias                     action du controller à appeler     
Route::get('/product/{id}', ['as' => 'product', 'uses' => 'ProductController@showProduct']);


Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@showAdminPannel']);
Route::get('/admin/newProduct', ['as' => 'new_product', 'uses' => 'AdminController@showNewProductForm']);
Route::post('/admin/newProduct', 'AdminController@saveNewProduct');
Route::get('/admin/editProduct/{id}', ['as' => 'edit_product', 'uses' => 'ProductController@editProduct']);
Route::get('/admin/deleteProduct/{id}', ['as' => 'delete_product', 'uses' => 'AdminController@deleteProduct']);
Route::post('/admin/editProduct/{id}', 'AdminController@updateProduct');