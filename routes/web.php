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

if (env('APP_ENV') === 'production') {
   \URL::forceScheme('https'); 
}




Route::post('/save', 'Customer@SaveCustomer')->name('save');
Route::get('/customer/datables', 'AdminController@Datatablesapi')->name('datatablesapu');



Route::get('/otp', 'Customer@otp')->name('otp');

Route::post('/otp-verify', 'Customer@otp')->name('otp.verify');

Route::post('/otp-retry', 'Customer@resendotp')->name('otp.retry');



Route::get('/cust-register', function () {
    return view('front.pages.register');
})->name('page.register');



Route::get('/', function () {
    return view('front.pages.homepage');
})->name('page.home');

Route::get('/privacy', function () {
    return view('front.pages.policy');
})->name('privacy');

Route::get('/contact', function () {
    return view('front.pages.contact');
})->name('page.contact');

Route::get('/about', function () {
    return view('front.pages.about');
})->name('page.about');

Route::get('/membership', function () {
    return view('front.pages.membership');
})->name('page.membership');

Route::get('/success', function () {
    return view('front.pages.success');
})->name('successful');

Route::get('/registered', function () {
    return view('front.pages.already');
})->name('already');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



