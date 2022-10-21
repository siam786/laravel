@extends('master')
@section('title','Category-Index-Page')
@section('content')
<h1>SubCategory Index Page</h1>
<div class="row">
    <div class="d-flex justify-content-end">
        <a href="{{ route('subcategory.create') }}" class="btn btn-success">Create Sub Category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">SubCategory Name</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory )
                <tr>
                    <th scope="row">{{ $subcategory->id }}</th>
                    <td>{{ $subcategory->category->name }}</td>
                    <td>{{$subcategory->name }}</td>
                    <td>{{$subcategory->created_at->diffForHumans() }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('subcategory.show',['subcategory'=>$subcategory->id]) }}"
                                class="btn btn-primary">Show</a>
                            <a href="{{ route('subcategory.edit',['subcategory'=>$subcategory->id]) }}"
                                class="btn btn-info">Edit</a>
                            <form action="{{ route('subcategory.destroy',['subcategory'=>$subcategory->id]) }}"
                                method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



