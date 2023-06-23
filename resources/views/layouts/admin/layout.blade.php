<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    @yield('title')
    </title>
    @include('layouts.admin.header')

</head>
<body >


@include('layouts.admin.navbar')
@yield('content')

@include('layouts.admin.left_sidebar')
@include('layouts.admin.sidebar')
@include('layouts.admin.footer')
@include('layouts.admin.script')
</body>
</html>
