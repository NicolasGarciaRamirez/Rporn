<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rporn</title>
    <meta name="description" content="" />
    <meta name="theme-color" content="#0d0d0d">
    <meta property="og:description" content="" />
    <meta name="twitter:description" content="" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icon-web.svg" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icon-web.svg" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icon-web.svg" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body class="c-app">
    <div id="app" class="w-100">
{{--        @include('template._nav')--}}
        <div class="c-wrapper">
            <div class="c-body">
                <main class="c-main pt-0">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
