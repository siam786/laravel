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
                <input type="text" class="form-control
                @error('category_name')
                is-invalid
                @enderror" id="category-name" name="category_name" placeholder="Please Provide Category Name"
                    value="{{ old('category_name') }}">
                @error('category_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
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
