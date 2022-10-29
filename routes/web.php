<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SubCategory;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;



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



Route::get('/', [FrontController::class,'home'])->name('home');




// Route::get('/service-page/{service_id?}/{company_name?}', function (
//     $service_id = null,
//     $company_name = null
// ) {
//     return 'Service' . $service_id . '' . $company_name;
// })->name('service');

Route::get('/service-page', [FrontController::class,'service'])->name('service');

Route::get('/contact-us', [FrontController::class,'contact'])->name('contact');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     echo $id, $name;
// })->where(['id' => '[0-9]+', 'name', '[A-Za-z]+']);

// Route::get('/category/{category_name}', function ($category_name) {
//     echo $category_name;
// })->whereIn('category_name', ['tv', 'mobile', 'laptop']);

// Route::get('/search/{name}',function($name){
//   echo   $name;
// })->where('name','.*');

// Route::get('/',function(Request $request){

//     dd(
//         $request->path(),
//         $request->is('/home'),
//         $request->fullUrl(),
//         $request->Host(),
//     );

// });

// grouping route
// Route::prefix('page')->name('laravel.')->group(function(){

//     Route::get('/home',function(){
//         return view ('home');
//     })->name('home');

//     Route::get('/contact',function(){
//         return view ('contact');
//     })->name('contact');

//     Route::get('/service-page', function () {
//         $services_page = 'Service Page';
//         $services = [
//             'Web Design',
//             'Web Development',
//             'Mobile App Development',
//             'Software Development',
//             'App Development',
//         ];

//         return view('service', compact('services', 'services_page'));
//     })->name('service');

// });

Route::get('/send-key', [FrontController::class,'sendMeDetails'])->name('sendmedetails');
Route::resource('/category', CategoryController::class);
Route::resource('/subcategory',SubCategoryController::class);
Route::get('/books',[FrontController::class,'books']);
