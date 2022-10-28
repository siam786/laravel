@extends('master')
@section('title','Category-Index-Page')
@section('content')
<div class="row">
    <div class="col-8 ml-auto">
        <div class="card p-4">
            <h1>{{ $category->name }}</h1>
            <h3>{{ $category->slug }}</h3>
            <p>{{ $category->created_at->format('g:i a l jS F Y') }}</p>
        </div>
    </div>
</div>
@endsection
