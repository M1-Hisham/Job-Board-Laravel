<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<!-- dark theme -->

<body class="bg-gray-900 text-white">

    {{-- محتوى الصفحة --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- الفوتر --}}
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>