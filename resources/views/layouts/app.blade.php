<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/fontawesome-free-5.14.0-web/css/all.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<style>
    .dashboard__items{
        text-align: center;
    }

    .fa-edit {
            margin-right: 20px;
        }

        img {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .admin__button {
            text-align: center;
        }

        .admin__button a {
            display: inline-block;
            margin-left: 10%;
            margin-right: 10%;
        }
</style>
<body>
    <div id="app">
        <div class="dashboard__logout">
            <a class="btn mt-1" style="background-color:rgba(255, 38, 0, 0.74); color:white"
                href="{{ route('admins.logout') }}" role="button">Đăng xuất</a>
        </div>

        <div class="dashboard__items">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a class="btn mt-1" style="background-color:rgba(101, 67, 3, 0.95); color:white"
                href="{{ route('admin.foodtypes.index') }}" role="button">Danh sách các loại thức ăn</a>
            <a class="btn mt-1" style="background-color:rgba(101, 67, 3, 0.95); color:white"
                href="{{ route('admin.foods.index') }}" role="button">Danh sách món</a>
            <a class="btn mt-1" style="background-color:rgba(0, 96, 255, 0.85); color:white"
                href="{{ route('admin.drinktypes.index') }}" role="button">Danh sách các loại thức uống</a>
            <a class="btn mt-1" style="background-color:rgba(0, 96, 255, 0.85); color:white"
                href="{{ route('admin.drinks.index') }}" role="button">Danh sách thức uống</a>
            <a class="btn mt-1" style="background-color:rgba(0, 96, 255, 0.85); color:white"
                href="{{ route('admin.tables.index') }}" role="button">Danh sách bàn</a>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
