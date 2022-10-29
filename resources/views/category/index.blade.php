@extends('master')
@section('title', 'Category-Index-Page')
@section('content')
<h1>Category Index Page</h1>
<div class="row">
    <div class="d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col"># of Subcategory</th>
                    <th scope="col">Category Slug</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->subcategories_count}}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('category.show', ['category' => $category->id]) }}"
                                class="btn btn-primary">Show</a>
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip"
                                    title='Delete'>Delete</button>
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
