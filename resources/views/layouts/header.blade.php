<!DOCTYPE html>
<html lang="en" data__theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    {{-- BOX ICON --}}
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/fontawesome-free-5.14.0-web/css/all.css') }}" rel="stylesheet">

    <title>Home Page</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--light-slider.css------------->
    <link href="{{ asset('css/lightslider.css') }}" rel="stylesheet">
    <!--Jquery-------------------->
    <script type="text/javascript" src="{{ asset('js/Jquery.js') }}"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="{{ asset('js/lightslider.js') }}"></script>
    <!--script-link----------->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <!-- lang -->
    <script type="text/javascript" src="{{ asset('js/lang.js') }}"></script>


    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script> --}}
</head>

<body>
    {{-- header --}}
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">NON</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a key="home" href="{{ route('index') }}" class="nav__link active tr">Trang chủ</a></li>
                    <li class="nav__item"><a key="food" href="{{ route('menu') }}" class="nav__link tr">Xem menu</a></li>
                    <li class="nav__item"><a key="drink" href="{{ route('drink') }}" class="nav__link tr">Nước uống</a></li>
                    <li class="nav__item"><a key="table" href="{{ route('table') }}" class="nav__link tr">Bàn</a></li>
                    <li class="nav__item"><a key="contacts" href="{{ route('contacts') }}" class="nav__link tr">Địa chỉ</a></li>
                    <li class="nav__item"><a key="follow" href="#suscribed" class="nav__link tr">Theo dõi</a></li>
                    <li class="nav__item"><a key="admin" href="{{ route('admins.login') }}" class="nav__link tr">Quản lí</a></li>
                    <li class="nav__item">
                        <div class="lang_switcher">
                            <button id="vn" class="lang">VN</button>
                            <button id="jp" class="lang">JP</button>
                        </div>
                    </li>
                    <li class="nav__item">
                    <div class="theme__toggle">
                    <input type="checkbox" id="switch" name="theme" /><label for="switch">Toggle</label>
                    </div>
                    </li>
                </ul>
            </div>

            <div class='open-close'>
                <!-- <i class='bx bx-cart nav__cart'></i> -->
                <i class='bx bx-menu nav__toggle' id="nav-toggle"></i>
            </div>
        </nav>
    </header>
    <section class="section">
        @yield('content')
    </section>

    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__box">
                <h3 class="footer__title">NÓN</h3>
                <p class="footer__deal">Products store</p>
                <a href="#"><img src="{{ asset('images/footerstore1.png') }}" alt="" class="footer__store"></a>
                <a href="#"><img src="{{ asset('images/footerstore2.png') }}" alt="" class="footer__store"></a>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORE</h3>
                <ul>
                    <li><a href="#" class="footer__link">Home</a></li>
                    <li><a href="#" class="footer__link">Food</a></li>
                    <li><a href="#" class="footer__link">Drink</a></li>
                    <li><a href="#" class="footer__link">Contacts</a></li>
                    <li><a href="#" class="footer__link">Suscribe</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Free Shipping</a></li>
                    <li><a href="#" class="footer__link">Gift Cards</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">FOLLOW</h3>
                <a href="#" class="footer__social"><i class='bx bxl-facebook-square'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-google'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2020 copyright all right reserved</p>
    </footer>

    <script>
        var checkbox = document.querySelector("input[name=theme]");

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
    }
});

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
