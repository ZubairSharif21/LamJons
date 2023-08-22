<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">
    <title>@yield('title')</title>
    @include('web_layout.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>

    @yield('head')
</head>
<body>
    @if (session('success'))
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    </script>
    @endif
    @if ($errors->any())
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'error',
            title: '{{ $errors->first() }}'
        });
    </script>
    @endif

@include('web_layout.nav')
@yield('content')
@include('web_layout.footer')
@include('web_layout.script')
@yield('scripts')

</body>
</html>
