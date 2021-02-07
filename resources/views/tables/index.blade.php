@extends('layouts.app')

@section('content')

<body>
    <tbody>
        <h2>Quản lý bàn</h2>
        <h2>テーブル管理</h2>
        <div class="admin__button">
            <a class="btn btn-outline-secondary" style="margin-bottom: 15px"
                href="{{ route('admin.tables.create') }}">Thêm bàn mới｜新品</a>
            <a class="btn btn-outline-secondary" style="margin-bottom: 15px" href="{{ route('index') }}">Xem
                trang
                chủ｜ホーム</a>
        </div>

        @if (session('message'))
            <p class="text-success">{{ session('message') }}</p>
        @endif
        @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
    </tbody>
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
                            <div class="table__button">
                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 1]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__available"></div>
                                    </button>
                                </form>

                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 2]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__using"></div>
                                    </button>
                                </form>


                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 3]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__pending"></div>
                                    </button>
                                </form>

                            </div>

                            </form>
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
                                    @break
                                @case(2)
                                    <p>Đang sử dụng</p>
                                    @break
                                @default
                                    <p>Đã được đặt</p>
                            @endswitch
                            <div class="table__button">
                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 1]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__available"></div>
                                    </button>
                                </form>

                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 2]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__using"></div>
                                    </button>
                                </form>


                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 3]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__pending"></div>
                                    </button>
                                </form>

                            </div>

                            </form>
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
                            <div class="table__button">
                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 1]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__available"></div>
                                    </button>
                                </form>

                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 2]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__using"></div>
                                    </button>
                                </form>


                                <form action="{{ route('admin.tables.edstatus', ['id' => $table->id, 'status' => 3]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit">
                                        <div class="box__button button__pending"></div>
                                    </button>
                                </form>

                            </div>

                            </form>
                        </div>

                    @endif


                @empty
                @endforelse
            </div>
        </section>
    </main>

</body>

@endsection

