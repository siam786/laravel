@extends('master')
@section('title','Category-Index-Page')
@section('content')
<h1>Book List</h1>
<div class="row">
    <div class="d-flex justify-content-end">
        {{-- <a href="{{ route('subcategory.create') }}" class="btn btn-success">Create Sub Category</a> --}}
    </div>
    <div class="col-8 m-auto">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book List</th>
                    <th scope="col">Book of Pages</th>
                    <th scope="col">Pulisher Year</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title}}</td>
                    <td>{{$book->no_pages }}</td>
                    <td>{{$book->publisher_year }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



