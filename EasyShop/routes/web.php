<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::get('/product_details/{id}', 'HomeController@product_details');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/shop', 'HomeController@shop');
Route::get('/products', 'HomeController@shop');
Route::get('/products/{name}', 'HomeController@proCats');

Route::get('/contact', 'HomeController@contact');
Route::post('/search', 'HomeController@search');
Route::get('/cart', 'CartController@index');

Route::get('/cart/addItem/{id}', 'CartController@addItem');

Route::get('/cart/remove/{id}', 'CartController@destroy');
Route::put('/cart/update/{id}', 'CartController@update');

// logged in user pages
Route::group(['middleware' => 'auth'], function() {
    Route::get('/checkout', 'CheckoutController@index');
    Route::post('/formvalidate', 'CheckoutController@formvalidate');

    Route::get('/profile', function() {
        return view('profile.index');
    });
    Route::get('/orders', 'ProfileController@orders');

    Route::get('/address', 'ProfileController@address');
    Route::post('/updateAddress', 'ProfileController@UpdateAddress');

    Route::get('/password', 'ProfileController@Password');
    Route::post('/updatePassword', 'ProfileController@updatePassword');

    Route::get('/thankyou', function() {
        return view('profile.thankyou');
    });

    Route::get('/mail', 'HomeController@sendmail');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'AdminController@index');

    Route::get('/addProduct', 'AdminController@index');
    Route::get('/products', 'AdminController@view_products');

    Route::get('/addCat', 'AdminController@add_cat');

    Route::Post('/catForm', 'AdminController@catForm');
    Route::get('/categories', 'AdminController@view_cats');
    Route::get('/CatEditForm/{id}', 'AdminController@CatEditForm');

    Route::post('/editCat', 'AdminController@editCat');


    Route::get('ProductEditForm/{id}', 'AdminController@ProductEditForm');
    
    
    Route::post('editProduct','AdminController@editProduct');
    
    Route::get('EditImage/{id}','AdminController@ImageEditForm');
    
    Route::post('editProImage','AdminController@editProImage');
    
    Route::get('deleteCat/{id}','AdminController@deleteCat');
});
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('addToWishList','HomeController@wishList');
Route::get('/WishList','HomeController@View_wishList');

Route::get('/removeWishList/{id}','HomeController@removeWishList');
//Route::get('/admin', 'AdminController@index');


