@extends('master')
@section('title','Category-Index-Page')
@section('content')
<h1>Products Page</h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Category Id</th>
            <th scope="col">SubCategory Id</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Color</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->subcategory->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->color }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}



@endsection
