@extends('layouts.header')

@section('content')
<body>

    @foreach ($drink_types as $drink_type)
        <h2 style="">{{ $drink_type->name }}</h2>
    <section class=" slider">
            <ul id="food-{{ $loop->index }}" class="cs-hidden">
                @forelse ($drink_type->drinks as $drink)
                @if ($drink->status)

                    <li class="item-a">
                        <!--box-slider--------------->
                        <div class="box">
                            <!--img-box---------->
                            <div class="slide-img">
                                <img alt="1" src="{{ Storage::url($drink->image) }}">
                                <!--overlayer---------->
                                {{-- <div class="overlay">
                                    <!--buy-btn------>
                                    <a href="#" class="buy-btn">Buy Now</a>
                                </div> --}}
                            </div>
                            <!--detail-box--------->
                            <div class="detail-box">
                                <!--type-------->
                                <div class="type">
                                    <a href="#">{{ $drink->drink_name_vn }}</a>
                                    <span>{{ $drink->drink_name_jp }}</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="price">{{ $drink->price }}円</a>

                            </div>

                        </div>
                    </li>
                @endif
                @empty
                    <p>.</p>
    @endforelse
    </ul>
    </section>
    @endforeach

    <script>
        let food_types_count = {{count($drink_types)}} ;
    </script>
</body>
@endsection
