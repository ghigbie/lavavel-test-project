<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel Tip Skipper</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-wr7w4m2EfEzuNSY5+Tcx0U2I0pFgQ4ZORR86f3uUpOpeDq1T6Qz1E0M9aUNR/TgBcA5cM/2fYfDPDgAYJaGv3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
        <link rel="stylesheet" href="/main.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        

        @include('components.navbar')

        @if(session()->has('success') ||  session()->has('failure'))
            <div class="container container--narrow mt-3">
                @if(session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{session('success')}}
                    </div>
                @else
                    <div class="alert alert-danger text-center">
                        {{session('failure')}}
                    </div>
                @endif
            </div>
        @endif
    
        {{$slot}}
    
        @include('components.footer')

    </body>
</html>
