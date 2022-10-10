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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service-page/{service_id?}/{company_name?}', function (
    $service_id = null,
    $company_name = null
) {
    return 'Service' . $service_id . '' . $company_name;
})->name('service');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/user/{id}/{name}', function ($id, $name) {
    echo $id, $name;
})->where(['id' => '[0-9]+', 'name', '[A-Za-z]+']);

Route::get('/category/{category_name}', function ($category_name) {
    echo $category_name;
})->whereIn('category_name', ['tv', 'mobile', 'laptop']);

Route::get('/search/{name}',function($name){
  echo   $name;
})->where('name','.*');