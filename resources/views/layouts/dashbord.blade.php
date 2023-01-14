<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta
            name="keywords"
            content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example"
        />
        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('assets/dashbord/css/all.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/front/css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/dashbord/css/styles.css ')}}" />
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i"
            rel="stylesheet"
        />
        <title>Dashboard | Tailwind Admin</title>
    </head>
    <body>
        <div class="mx-auto bg-grey-400">
            <!--Screen-->
            @include('dashbord.includes.header')
            <div class="min-h-screen flex flex-col">
                <div class="flex flex-1">
                    @include('dashbord.includes.asite')
                    <!--Main-->
                    <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                        @yield('content')
                    </main>
                    <!--/Main-->
                </div>
                @include('dashbord.includes.footer')
            </div>
        </div>
        <script src="{{ asset('assets/dashbord/js//main.js') }}"></script>
    </body>
</html>
