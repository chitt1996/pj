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

Route::group([
    'namespace' => 'Client',
], function() {
    Route::get('', [
        'uses' => 'HomeController@index']);
    Route::get('about', 'HomeController@about');
    Route::get('contact', 'HomeController@contact');
    Route::get('faq', 'HomeController@faq');

    Route::get('blog', 'BlogController@blog');

    Route::get('wishlist', 'CartController@wishlist');

    Route::get('compare', 'CompareController@compare');

    Route::get('order', 'OrderController@checkout');
    Route::get('shop', 'ProductController@shop');
});