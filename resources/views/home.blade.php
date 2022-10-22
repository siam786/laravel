@extends('master')
@section('title', 'Home Page')
@section('content')
<h1>{{ $home_page }}</h1>
<p>{{ $name }}</p>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">NidCard</th>
            <th scope="col">Joined Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->nidcard->card_number ?? ''  }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach

    </tbody>
</table>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sub Category ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subCategory as $subCategory)

        <tr>
          <th scope="row">1</th>
          <td>{{ $subCategory->id }}</td>
          <td>{{  $subCategory->name}}</td>
          <td>{{ $subCategory->created_at }}</td>
        </tr>


        @endforeach
    </tbody>
</table>
@endsection
