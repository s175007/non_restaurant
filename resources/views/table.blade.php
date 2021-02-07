@extends('layouts.header')

@section('content')

    <body>
        <main class="l-main">
            <section class="new section" id="drink">
                <h1 class="table__title">カウンター</h1>
                <div class="new__container bd-grid">
                    @forelse ($tables as $table)
                        @if ($table->name == 1)
                            @switch($table->status)
                                @case(1)
                                <div class="table__box table__box__available">
                                    @break

                                    @case(2)
                                    <div class="table__box table__box__using">
                                        @break

                                        @default
                                        <div class="table__box table__box__pending">

                                        @endswitch


                                        <h1>K{{ $table->number }}</h1>
                                        @switch($table->status)
                                            @case(1)
                                            <p>Trống</p>
                                            @break
                                            @case(2)
                                            <p>Đang sử dụng</p>
                                            @break
                                            @default
                                            <p>Đã được đặt</p>
                                        @endswitch
                                    </div>

                        @endif


                    @empty
                    @endforelse
                </div>

                <h1 class="table__title">テーブル</h1>
                <div class="new__container bd-grid">
                    @forelse ($tables as $table)
                        @if ($table->name == 2)
                            @switch($table->status)
                                @case(1)
                                <div class="table__box table__box__available">
                                    @break

                                    @case(2)
                                    <div class="table__box table__box__using">
                                        @break

                                        @default
                                        <div class="table__box table__box__pending">

                                        @endswitch


                                        <h1>T{{ $table->number }}</h1>
                                        @switch($table->status)
                                            @case(1)
                                            <p>Trống</p>
                                            <a href="" class="collection__view">Liên hệ</a>

                                            @break
                                            @case(2)
                                            <p>Đang sử dụng</p>
                                            @break
                                            @default
                                            <p>Đã được đặt</p>
                                        @endswitch
                                    </div>


                        @endif


                    @empty
                    @endforelse
                </div>

                <h1 class="table__title">座席</h1>
                <div class="new__container bd-grid">
                    @forelse ($tables as $table)
                        @if ($table->name == 3)
                            @switch($table->status)
                                @case(1)
                                <div class="table__box table__box__available">
                                    @break

                                    @case(2)
                                    <div class="table__box table__box__using">
                                        @break

                                        @default
                                        <div class="table__box table__box__pending">

                                        @endswitch


                                        <h1>Z{{ $table->number }}</h1>
                                        @switch($table->status)
                                            @case(1)
                                            <p>Trống</p>
                                            @break
                                            @case(2)
                                            <p>Đang sử dụng</p>
                                            @break
                                            @default
                                            <p>Đã được đặt</p>
                                        @endswitch
                                    </div>


                        @endif


                    @empty
                    @endforelse
                </div>
            </section>
        </main>

    </body>
@endsection
