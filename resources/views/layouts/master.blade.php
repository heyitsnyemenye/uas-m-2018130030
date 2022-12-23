<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AccountDB') | Account DataBase</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css_after')
</head>

<body class="text-center">

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="/">
            <i class="fa fa-film fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">AccountDB</span>
        </a>
    </nav>

    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
            <li class="list-group-item sidebar-separator-titletext-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
                <a href="{{ route('accounts.index') }}"
                class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-film fa-fw mr-3"></span>
                        <span class="menu-collapsed">Account</span>
                    </div>
                </a>
            </ul>
        </div>

        <div class="col p-4">
            @yield('content')
        </div>

        </div>
            <script src="{{ asset('js/app.js') }}"></script>
        @stack('js_after')

    </body>
</html>
