@extends('master')
@section('title','Category-Create-Page')
@section('content')
<h1>Category Page</h1>
<div class="row">
    <div class="col-md-8 m-auto">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category-name" class="form-label">Enter Category Name</label>
                <input type="text" class="form-control" id="category-name" name="category_name"
                    placeholder="Please Provide Category Name">

            </div>
            <div class="mb-3">
                <label for="slug-name" class="form-label">Enter Slug Name</label>
                <input type="text" name="category_slug" class="form-control" id="slug-name"
                    placeholder="Please Provide Slug Name">

            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="category_checkbox" class="form-check-input" id="categoryslug">
                <label class="form-check-label" for="categoryslug">Active/Inactive</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
