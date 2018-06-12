<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| middleware are stateless and provides features like session state and CSRF(Cross-site request forgery) protection.
| The router allows you to register routes that respond to any HTTP verb such as 'get', 'post', 'put','patch','delete'
| note when using {id}, it means that we'll be passing the id of item
| The name method may be used to prefix each route name in the group with a given string.
*/



//FRONTEND ROUTES
    //header
 Route::get('/layouts/FrontLayout/Front_header','headerController@Front_header');
 Route::get('/Front/register','UserController@showRegisterForm')->name('user.register');
 Route::post('/Front/register','UserController@register');
 Route::get('/auth/login','UserController@showLoginForm')->name('user.login');
 Route::post('/auth/login','UserController@login');
 //Index routes
 Route::get('/','IndexController@index');
 Route::get('/Front/about','IndexController@about')->name('about');
 Route::get('/Front/contact','IndexController@contact')->name('contact');
 //Account
 Route::get ( '/Front/UsersAccount/wishList' ,'ReservationController@wishList')->name ( 'reservation.wishList');
 Route::post( '/Front/UsersAccount/wishList/{vehicle}','ReservationController@wishList')->name('reservation.wishList');
 Route::get ( '/Front/UsersAccount/account' ,'IndexController@account')->name ( 'account');
 //shop
 Route::get('/Front/rent','IndexController@rent')->name('rent');
 //location
 Route::get('/Front/shop/rent/location','CheckoutController@location')->name ( 'delivery.location');
 Route::post('Front/shop/rent/location','reservationDateController@bookingDate')->name( 'get.Location');
 //Reservation
 Route::get('/Front/shop/rent/reservation','ReservationController@shop')->name('reservation');
 Route::post('/Front/shop/rent/reservation','ReservationController@store')->name('reservation.store');
 Route::delete ( '/Front/shop/rent/reservation/{vehicle}','ReservationController@destroy')->name ('delete.item');
 Route::patch ( '/Front/shop/rent/reservation/{vehicle}','ReservationController@update')->name ('update.item'); // to update number of days dynamically
 //checkout
 Route::get('/Front/shop/rent/payment', 'CheckoutController@index')->name('checkout.index');
 Route::post('/Front/shop/rent/payment', 'CheckoutController@store')->name('checkout.store');
 Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
 Route::get('/Front/shop/rent/personalDetails','CheckoutController@personalDetails')->name ( 'personal.details');
 //coupon
 Route::post('/coupon', 'CouponController@reservation')->name('coupon.reservation');
 Route::delete('/coupon', 'CouponController@destroy')->name('coupon.destroy');
 
 //confirmation
 Route::get('/Front/shop/rent/confirmation', 'ConfirmationController@index')->name('confirmation.index');
 //vehiclesPage routes
 Route::get('/vehicles/{url}','VehicleController@vehicles'); //to check vehicles/url. Use this route for categories view frontend.
 Route::get('/vehicles/details/{id}','VehicleController@vehiclee');
 //END FRONTEND ROUTES

 //BACKEND ROUTES
 //Admin setting routes
 Route::match(['get','post'], '/Admin','AdminController@login');
 Route::get('/auth/register','RegisterController@showRegistrationForm');
 Route::post('/auth/register','RegisterController@register');
 Route::auth();
 Route::get('/logout','AdminController@logout');
 Route::get('/home', 'HomeController@index')->name('home');
 
 
 
 //Route will check whether user has the privilege to access admin (security purpose) - cannot access without login
 Route::group(['middleware' => ['auth']], function(){
 Route::get('/Admin/dashboard','AdminController@dashboard');
 Route::get('/Admin/commerce','AdminController@commerce');
 Route::get('/Admin/commerce','AdminController@amount');
 Route::get('/Admin/setting','AdminController@setting'); //Will also save in middleware(redirectAuth) to avoid unwanted access
 Route::get('/Admin/check_password','AdminController@passwordChecker');
 Route::match(['get','post'],'/Admin/update_password','AdminController@passwordChecker');

 //Categories Routes

 Route::match(['get','post'],'/Admin/add_category','CategoryController@addCategory');
 Route::match(['get','post'],'/Admin/edit_category/{id}','CategoryController@editCategory');
 Route::match(['get','post'],'/Admin/delete_category/{id}','CategoryController@deleteCategory');
 Route::get('/Admin/view_category','CategoryController@viewCategory');
 Route::get('/Admin/total_categories', 'CategoryController@TotalCategory');

 //Vehicle Routes
 Route::match(['get','post'],'/Admin/add_vehicle','VehicleController@addVehicle');
 Route::match(['get','post'],'/Admin/edit_vehicle/{id}','VehicleController@editVehicle');
 Route::get('/Admin/delete_vehicle/{id}','VehicleController@deleteVehicle');
 Route::match(['get'],'/Admin/delete_image/{id}','VehicleController@deleteImage');
 Route::get('/Admin/view_vehicle','VehicleController@viewVehicle');

 //vehicle attributes routes
 Route::match(['get','post'],'/Admin/add_attributes/{id}','VehicleController@addAttributes')->name('add_attribute');
 //END BACKEND ROUTES
 
     
 
 });


 