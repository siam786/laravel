@extends('master')

@section('content')
    <h1>{{ $contact_page }}</h1>
    @if ($product_count <= 10)
        <p>Product is Reducing.... Please refil</p>
    @else
        <p>Product is now:{{ $product_count }}</p>
    @endif

    @switch($color)
        @case('blue')
            <p>Blue Color is available</p>
        @break

        @case('orange')
            <p>Orange Color is available</p>
        @break

        @case('white')
            <p>White Color is available</p>
        @break

        @case('red')
            <p>Red Color is available</p>
        @break

        @default
        <p>Stock Out</p>

    @endswitch

    @empty($products)
    <h5>No Products Founds</h5>
    @endempty




@endsection
