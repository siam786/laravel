<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FrontController extends Controller
{
    // public function welcome()
    // {
    //     return view('welcome');
    // }

    public function home()
    {
        return view(
            'home',

            [
                'home_page' => 'Home Page',
                'name' => 'Laravel 9 Master Course for you',
            ]
        );
    }
    public function service()
    {
        $services_page = 'Service Page';
        $services = [
            'Web Design',
            'Web Development',
            'Mobile App Development',
            'Software Development',
            'App Development',
        ];

        return view('service', compact('services', 'services_page'));
    }

    public function contact()
    {
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
    return response()
        ->json(
            [
                'products' => $products,
                'product_count' => $product_count,
            ],
            200
        )

        ->header('content-type', 'application/json')
        ->cookie('My_idCard', 'shohrab hossain', 3600);
    }

    
}
