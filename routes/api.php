<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: form-data; charset=UTF-8");
header('Access-Control-Max-Age: 1000');

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API start
|--------------------------------------------------------------------------
| By : AbdelRahman - at : 3/2020
*/

Route::middleware('api_lang')->group(function () {

    /*
    | AuthController start
    */

    #sign up
    Route::post('register', 'authController@register');
    #sign in
    Route::post('login', 'authController@login');
    #logout
    Route::post('logout', 'authController@logout');
    #active account
    Route::post('active-account', 'authController@activeAccount');
    #resend active code
    Route::post('resend-code', 'authController@resendCode');
    #check email #forget password
    Route::post('check-email', 'authController@checkEmail');
    #check code #forget password
    Route::post('check-code', 'authController@checkCode');
    #reset password
    Route::post('reset-password', 'authController@resetPassword');
    #update password
    Route::post('update-password', 'authController@updatePassword');
    #update user
    Route::post('update-user', 'authController@updateUser');
    #show user
    Route::post('show-user', 'authController@showUser');

    /*
    | apiController start
    */

    ##############################home & services
    #home
    Route::post('home', 'apiController@home');
    #show country
    Route::post('show-country', 'apiController@showCountry');
    #show data
    Route::post('show-data', 'apiController@showData');
    #show section
    Route::post('show-section', 'apiController@showSection');
    #show sub-section
    Route::post('show-sub-section', 'apiController@showSubSection');
    #show services
    Route::post('show-services', 'apiController@showServices');
    #show favourite-services
    Route::post('show-favourite-services', 'apiController@showFavouriteServices');
    #show service
    Route::post('show-service', 'apiController@showService');
    #store review
    Route::post('store-review', 'apiController@storeReview');
    #add to like
    Route::post('add-to-like', 'apiController@addToLike');

    ##############################Cart
    #show
    Route::any('show-cart', 'apiController@show_cart');
    #add
    Route::any('add-to-cart', 'apiController@add_to_cart');
    #update & Delete
    Route::any('update-to-cart', 'apiController@update_to_cart');
    #update & Delete All
    Route::any('update-all-cart', 'apiController@update_all_cart');

    ##############################address page
    #show
    Route::post('show-address', 'apiController@showAddress');
    #store
    Route::post('store-address', 'apiController@storeAddress');
    #update
    Route::post('update-address', 'apiController@updateAddress');
    #delete
    Route::post('delete-address', 'apiController@deleteAddress');
    
    ##############################static page
    #page
    Route::post('page', 'apiController@page');
    #contact us
    Route::post('contact-us', 'apiController@contactUs');

    ##############################notification
    #show
    Route::post('show-notification', 'apiController@showNotification');
    #delete
    Route::post('delete-notification', 'apiController@deleteNotification');

    ##############################bank
    #account
    Route::post('bank-account', 'apiController@bankAccount');
    #transfer
    Route::post('bank-transfer', 'apiController@bankTransfer');

    /*
    | orderController start
    */

    #check promo
    Route::post('check-promo', 'orderController@checkPromo');
    #store order
    Route::post('store-order', 'orderController@storeOrder');
    #show all orders
    Route::post('show-all-orders', 'orderController@showAllOrders');
    #show order
    Route::post('show-order', 'orderController@showOrder');
});
