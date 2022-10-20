<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('include.style')

    <title>@yield('title')</title>
</head>

<body>
    @include('include.script')
    @include('include.navbar')
    <div class="container p-4">
        @if (session('status'))
    <div class=" bg-success text-white p-2 m-2">
        {{ session('status') }}
    </div>
    @endif
        @yield('content')
    </div>
</body>

</html>
