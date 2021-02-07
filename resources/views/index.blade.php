<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    {{-- BOX ICON --}}
    <link href="{{ asset('css/fontawesome-free-5.14.0-web/css/all.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/Jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lang.js') }}"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Home Page</title>
</head>

<body>
    {{-- header --}}
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a class="nav__logo" href="#" class="nav__logo">NON</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a key="home" href="{{ route('index') }}" class="nav__link active tr">Trang
                            chủ</a></li>
                    <li class="nav__item"><a key="food" href="{{ route('menu') }}" class="nav__link tr">Xem menu</a>
                    </li>
                    <li class="nav__item"><a key="drink" href="{{ route('drink') }}" class="nav__link tr">Nước uống</a>
                    </li>
                    <li class="nav__item"><a key="table" href="{{ route('table') }}" class="nav__link tr">Bàn</a></li>
                    <li class="nav__item"><a key="contacts" href="{{ route('contacts') }}" class="nav__link tr">Địa
                            chỉ</a></li>
                    <li class="nav__item"><a key="follow" href="#suscribed" class="nav__link tr">Theo dõi</a></li>
                    <li class="nav__item"><a key="admin" href="{{ route('admins.login') }}" class="nav__link tr">Quản
                            lí</a></li>
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

    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">NEW <br><span>Món mới</span></h1>
                    <a href="{{ route('menu') }}" class="button">XEM MENU</a>
                </div>

                <img src="{{ asset('images/ocomchuoi.png') }}" alt="" class="home__img">
            </div>
        </section>

        <section class="collection section">
            <div class="collection__container bd-grid">
                <div class="collection__box">
                    <img src="{{ asset('images/Nhannguyen.jpg') }}" alt="" class="collection__imgleft">

                    <div class="collection__data">
                        <h2 class="collection__title"><span class="collection__subtitle">Chị chủ quán</span><br>Nhàn
                            Nguyễn</h2>
                        <a href="" class="collection__view">Liên hệ</a>
                    </div>
                </div>

                <div class="collection__box">
                    <div class="collection__data">
                        <h2 class="collection__title"><span class="collection__subtitle">Anh chủ quán</span><br>Khương
                            Duy</h2>
                        <a href="" class="collection__view">Liên hệ</a>
                    </div>

                    <img src="{{ asset('images/Khuongduy.jpg') }}" alt="" class="collection__imgright">
                </div>
            </div>
        </section>

        <section class="featured section" id="food">
            <div class="featured__content">

                <h2 class="section-title">Các món mới</h2>
                <a href="{{ route('menu') }}" class="button">Xem tất cả</a>

            </div>

            <div class="featured__container bd-grid">
                <div class="featured__product">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <img src="{{ asset('images/trungnonchaytoi.png') }}" alt="" class="featured__img">
                    </div>
                    <div class="featured__data">
                        <h3 class="featured__name">Trứng gà non cháy tỏi</h3>
                        <span class="featured__price">680円</span>
                    </div>
                </div>

                <div class="featured__product">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <img src="{{ asset('images/Thitheonuong.png') }}" alt="" class="featured__img">
                    </div>
                    <div class="featured__data">
                        <h3 class="featured__name">Thịt heo nướng</h3>
                        <span class="featured__price">480円</span>
                    </div>
                </div>

                <div class="featured__product">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <img src="{{ asset('images/Noitruong.png') }}" alt="" class="featured__img">
                    </div>
                    <div class="featured__data">
                        <h3 class="featured__name">Nồi trường</h3>
                        <span class="featured__price">480円</span>
                    </div>
                </div>

                <div class="featured__product">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <img src="{{ asset('images/Goisua.png') }}" alt="" class="featured__img">
                    </div>
                    <div class="featured__data">
                        <h3 class="featured__name">Gỏi sứa</h3>
                        <span class="featured__price">780円</span>
                    </div>
                </div>

            </div>
        </section>

        <section class="offer section">
            <div class="offer__bg">
                <div class="offer__data">
                    <h2 class="offer__title">Giảm giá đặc biệt</h2>
                    <p class="offer__description">Đây là chương trình giảm giá đặc biệt dành cho quý khách</p>

                    <a href="#" class="button">Xem chi tiết</a>
                </div>
            </div>
        </section>

        <section class="new section" id="drink">
            <div class="new__content">
                <h2 class="section-title">Thức uống</h2>
                <a href="{{ route('drink') }}" class="button">Xem menu thức uống</a>
            </div>

            <div class="new__container bd-grid">
                <div class="new__box">
                    <img src="{{ asset('images/Coca.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">Nước ngọt</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="{{ asset('images/Beer.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">Bia</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="{{ asset('images/Cocktail.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">Cocktail</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="{{ asset('images/Haiboru.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">ハイボール</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="{{ asset('images/Sake.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">Rượu</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="{{ asset('images/Chyuuhai.png') }}" alt="" class="new__image">

                    <div class="new__link">
                        <a href="#" class="button">チュウハイ</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter section" id="suscribed">
            <div class="newsletter__container bd-grid">
                <div class="newslettet__suscribe">
                    <h2 class="section-title">Theo dõi chúng tôi</h2>
                    <p class="newsletter__description">Theo dõi chúng tôi để nhận được những thông báo mới nhé!</p>

                    <form action="" class="newsletter__form">
                        <input type="text" class="newsletter__input" placeholder="Enter your Email">
                        <a href="#" class="button">SUSCRIBE</a>
                    </form>
                </div>
            </div>
        </section>

        <section class="contacts section" id="contacts">
            <h2 class="section-title">Địa chỉ</h2>
            <div class="contacts__container bd-grid">
                <div class="contacts__content">
                    <p class="contacts__contact">住所：福岡県北九州市小倉北区紺屋町1-12-2F</p>
                    <a href="https://www.google.com/maps/place/%E3%80%92802-0081+%E7%A6%8F%E5%B2%A1%E7%9C%8C%E5%8C%97%E4%B9%9D%E5%B7%9E%E5%B8%82%E5%B0%8F%E5%80%89%E5%8C%97%E5%8C%BA%E7%B4%BA%E5%B1%8B%E7%94%BA%EF%BC%91%E2%88%92%EF%BC%91%EF%BC%92+2f/@33.8810659,130.8812286,20z/data=!4m13!1m7!3m6!1s0x3543bf52415d4f9f:0x14af68e5bf210bde!2z44CSODAyLTAwODEg56aP5bKh55yM5YyX5Lmd5bee5biC5bCP5YCJ5YyX5Yy657S65bGL55S677yR4oiS77yR77ySIDJm!3b1!8m2!3d33.8811578!4d130.8812633!3m4!1s0x3543bf52415d4f9f:0x14af68e5bf210bde!8m2!3d33.8811578!4d130.8812633"
                        class="button">ĐI ĐẾN</a>
                </div>
                <img src="{{ asset('images/contact.png') }}" alt="" class="contacts__img">
            </div>
        </section>
    </main>

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

    <script src="{{ asset('js/main.js') }}"></script>
</body>

<script>
    var checkbox = document.querySelector("input[name=theme]");

    checkbox.addEventListener('change', function() {
        if (this.checked) {
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

</html>
