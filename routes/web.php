<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (Request $request) {
     return view('home',

     [
        'home_page' => 'Home Page',
        'name' => 'Laravel 9 Master Course',
    ]);
    //     $data = [
    //         'home_page' => 'Home Page',
    //  'name' => 'Laravel 9 Master Course',
    //     ];
    // return response ($data)
    // ->header('content-type','application/json')
    //  ->cookie('My_idCard','shohrab hossain',3600);

    // return redirect('/contact-us');


})->name('home');

Route::get('/service-page/{service_id?}/{company_name?}', function (
    $service_id = null,
    $company_name = null
) {
    return 'Service' . $service_id . '' . $company_name;
})->name('service');

Route::get('/service-page', function () {
    $services_page = 'Service Page';
    $services = [
        'Web Design',
        'Web Development',
        'Mobile App Development',
        'Software Development',
        'App Development',
    ];

    return view('service', compact('services', 'services_page'));
})->name('service');

Route::get('/contact-us', function () {
    $contact_page = 'Contact US';

    $color = 'white';
    $products = [
        1 => [
            'name' => 'Bag',
            'color' => 'red',
            'price' => '1250',
        ],
        2 => [
            'name' => 'Samsung',
            'color' => 'yellow',
            'price' => '1550',
        ],
        3 => [
            'name' => 'watch',
            'color' => 'white',
            'price' => '250',
        ],
        4 => [
            'name' => 'laptop',
            'color' => 'red',
            'price' => '2250',
        ],
    ];
    $product_count = count($products);
   return response () -> json([
    'products'=> $products,
    'product_count'=> $product_count,
   ],200)

   ->header('content-type','application/json')
     ->cookie('My_idCard','shohrab hossain',3600);

    // return view(
    //     'contact',
    //     compact('contact_page', 'product_count', 'color', 'products')
    // );
})->name('contact');

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