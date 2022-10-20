@extends('master')
@section('title','Category-Create-Page')
@section('content')
<h1>Sub Category Page</h1>
<div class="row">
    <div class="d-flex justify-content-start">
        <a href="{{ route('subcategory.index') }}" class="btn btn-success">View Sub Category</a>
    </div>
    <div class="col-md-6 m-auto">
        <div class="card py-4 px-4">
        <form action="{{ route('subcategory.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <select class="form-select @error('category_id')
                is-invalid
                @enderror" name="category_id">
                    <option selected>Open this Sub Category Name</option>
                    @foreach ($categories as $category )

                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                  </select>

                  @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'Please Select Category Name' }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subcategory-name" class="form-label">Enter SubCategory Name</label>
                <input type="text" class="form-control
                @error('subcategory_name')
                is-invalid
                @enderror" id="subcategory-name" name="subcategory_name" placeholder="Please Provide Sub Category Name"
                    value="{{ old('subcategory_name') }}">
                @error('subcategory_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="mb-3 form-check">
                <input type="checkbox" name="subcategory_checkbox" class="form-check-input" id="subcategoryslug">
                <label class="form-check-label" for="subcategoryslug">Active/Inactive</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
</div>

@endsection
