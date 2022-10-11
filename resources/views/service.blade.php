@extends('master')
@section('title','Service-Page')
@section('content')
    <h1>{{ $services_page }}</h1>
    @foreach ($services as $service)
        <ul>
            <li>{{ $service }}</li>
        </ul>
    @endforeach
@endsection
