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

    @forelse ($products as $key => $product)
        <ul class="">
            @if ($loop->first)
            @continue
            @endif
            <li>{{ $key }}</li>
            <li>{{ $product['name'] }}</li>
            <li>{{ $product['color'] }}</li>
            <li>{{ $product['price'] }}</li>
        </ul>
        @empty
        <h4>No Product Found!!</h4>
    @endforelse


@endsection
