<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@rakadks">
    <title>@yield('title')</title>
    {{-- --}}
    @stack('before-style')
    @include('layouts.style.style')
    @stack('after-style')
</head>


<body>
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    @stack('before-script')

    @include('layouts.script.script')

    @stack('after-script')
</body>

</html>