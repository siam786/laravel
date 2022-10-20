@extends('master')
@section('title','Category-Index-Page')
@section('content')

<div class="row">
    <div class="col-8 m-auto">
        <div class="card p-4">
            <h1>{{ $subcategory->name }}</h1>
            <h3>{{ $subcategory->category->name }}</h3>
            <p>{{ $subcategory->created_at->format('d-m-Y H:i A') }}</p>
        </div>
    </div>
</div>
@endsection
