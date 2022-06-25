<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="/assets/volt/notyf/notyf.min.css">
    <link rel="stylesheet" href="/assets/volt/volt.css">
    @stack('style')
</head>
<body>
    @include('layouts.student.nav')

    <main class="content">
        @include('layouts.student.topbar')

        @yield('content')

        @include('layouts.student.footer')
    </main>

    @include('layouts.student.script')
    <x-sweetalert/>
    @stack('script')
</body>
</html>
