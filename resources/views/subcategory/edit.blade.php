@extends('master')
@section('title','Category-Create-Page-Edit')
@section('content')
<h1>Sub Category Page Edit</h1>
<div class="row">
    <div class="d-flex justify-content-start">
        <a href="{{ route('subcategory.index') }}" class="btn btn-success">View Sub Category</a>
    </div>
    <div class="col-md-6 m-auto">
        <div class="card py-4 px-4">
            <form action="{{ route('subcategory.update',['subcategory'=>$subcategory->id]) }}" method="POST"> @method("PUT")
                @csrf
                <div class="mb-3">
                    <select class="form-select @error('category_id')
                is-invalid
                @enderror" name="category_id">
                        <option>Please Select Category Name</option>
                        @foreach ($categories as $category )

                        <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id)
                            selected
                            @endif

                            >{{ $category->name }}</option>
                        @endforeach

                    </select>

                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'Please Select Category Name' }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subcategory-name" class="form-label">SubCategory Name</label>
                    <input type="text" class="form-control
                @error('subcategory_name')
                is-invalid
                @enderror" id="subcategory-name" name="subcategory_name" placeholder="Please Provide Sub Category Name"
                        value="{{ $subcategory->name }}">
                    @error('subcategory_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-3 form-check">
                    <input type="checkbox" name="subcategory_checkbox" @if ($subcategory->is_active)
                    checked
                    @endif class="form-check-input" id="subcategoryslug">
                    <label class="form-check-label" for="subcategoryslug">Active/Inactive</label>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
