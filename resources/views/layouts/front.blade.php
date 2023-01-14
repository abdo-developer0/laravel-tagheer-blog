<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tagheer</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('/favicon.ico') }}" rel="icon">
        <!-- Font Awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/front/css/app.css' )}}" rel="stylesheet">
    </head>
    <body>
        @include('front.includes.navbar')

        <main id="app" class="pb-4" style="min-height: 90vh;padding-top: 10vh;">
            @yield('content')

            <a href="#" class="btn btn-primary p-4 rounded-circle"><i class="fas fa-angle-double-up"></i></a>
            
        </main>

        @include('front.includes.footer')

        <!-- Template Javascript -->
        <script src="{{ asset('assets/front/js/app.js') }}"></script>
    </body>
</html>