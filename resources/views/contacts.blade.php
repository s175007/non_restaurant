@extends('layouts.header')

@section('content')
<body style="background-color: var(--bg-color);">
<main class="l-main">
    <section class="collection section">
        <div class="collection__container bd-grid">
            <div class="collection__box">
                <img src="{{ asset('images/Nhannguyen.jpg') }}" alt="" class="collection__imgleft">

                <div class="collection__data">
                    <h2 class="collection__title"><span class="collection__subtitle">Chị chủ quán</span><br>Nhàn
                        Nguyễn</h2>
                    {{-- <a class="collection__view">Liên hệ</a> --}}
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-square' style="font-size: 2rem"></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt' style="font-size: 2rem"></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-google' style="font-size: 2rem"></i></a>
                </div>
            </div>

            <div class="collection__box">
                <div class="collection__data">
                    <h2 class="collection__title"><span class="collection__subtitle">Anh chủ quán</span><br>Khương
                        Duy</h2>
                    {{-- <a href="" class="collection__view">Liên hệ</a> --}}
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-square' style="font-size: 2rem"></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt' style="font-size: 2rem"></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-google' style="font-size: 2rem" ></i></a>
                </div>

                <img src="{{ asset('images/Khuongduy.jpg') }}" alt="" class="collection__imgright">
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
</body>


@endsection
