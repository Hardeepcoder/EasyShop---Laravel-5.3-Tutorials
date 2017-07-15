<?php


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/range', function() {
    return view('front.range');
});
Route::post('addReview', 'HomeController@addReview');
Route::get('/product_details/{id}', 'HomeController@product_details');
Route::get('selectSize', 'HomeController@selectSize');
Route::get('selectColor', 'HomeController@selectColor');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/shop', 'HomeController@shop');

Route::get('/products', 'HomeController@shop');
Route::get('/products/{name}', 'HomeController@proCats');

Route::get('/contact', 'HomeController@contact');
Route::post('/search', 'HomeController@search');
Route::get('/cart', 'CartController@index');

Route::get('/cart/addItem/{id}', 'CartController@addItem');

Route::get('/cart/remove/{id}', 'CartController@destroy');
Route::get('/cart/update/{id}', 'CartController@update');

Route::get('/newArrival', 'HomeController@newArrival');

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

//admin links
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'AdminController@index');

    Route::get('/addProduct', 'AdminController@addpro_form');
    Route::get('/products', 'AdminController@view_products');

    Route::get('/addCat', 'AdminController@add_cat');

    Route::Post('/catForm', 'AdminController@catForm');
    Route::get('/categories', 'AdminController@view_cats');
    Route::get('/CatEditForm/{id}', 'AdminController@CatEditForm');

    Route::post('/editCat', 'AdminController@editCat');
    Route::get('ProductEditForm/{id}', 'AdminController@ProductEditForm');
    Route::post('editProduct', 'AdminController@editProduct');
    Route::get('EditImage/{id}', 'AdminController@ImageEditForm');
    Route::post('editProImage', 'AdminController@editProImage');
    Route::get('deleteCat/{id}', 'AdminController@deleteCat');
    Route::get('/addProperty/{id}', function($id){
      return view('admin.addProperty')->with('id', $id);
    });
    Route::get('/addPropertyAll', function(){
      return view('admin.addProperty');
    });
    Route::post('sumbitProperty','AdminController@sumbitProperty');
    Route::post('editProperty','AdminController@editProperty');
    Route::get('addSale', 'AdminController@addSale');

    Route::get('addAlt/{id}', 'AdminController@addAlt');
    Route::post('submitAlt','AdminController@submitAlt');
    Route::get('/users','AdminController@users');
    Route::get('/updateRole','AdminController@updateRole');


    //import products
    Route::post('import_products','AdminController@import_products');

});
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('addToWishList', 'HomeController@wishList');
Route::get('/WishList', 'HomeController@View_wishList');
Route::get('/removeWishList/{id}', 'HomeController@removeWishList');
//Route::get('/admin', 'AdminController@index');
