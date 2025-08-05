<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
    <body>

        @include('partials.header')
    <div class="contentwrap">
        <main>
            @yield('content')
        </main>
    </div>

        @include('partials.footer')

    </body>
</html>
