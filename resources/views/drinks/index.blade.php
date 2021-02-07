@extends('layouts.app')

@section('content')

    <body>
        <div style="margin : 50px">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Tên thức uống tiếng việt</th>
                        <th scope="col">Tên thức uống tiếng nhật</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Hành động</th>
                    </tr>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">タイプ</th>
                        <th scope="col">ベトナム語</th>
                        <th scope="col">日本語</th>
                        <th scope="col">価格</th>
                        <th scope="col">状態</th>
                        <th scope="col">イメージ</th>
                        <th scope="col">アクション</th>
                    </tr>
                </thead>
                <tbody>
                    <h2>Danh sách thức uống</h2>
                    <h2>飲み物のリスト</h2>
                    <div class="admin__button">
                        <a class="btn btn-outline-secondary" style="margin-bottom: 15px"
                            href="{{ route('admin.drinks.create') }}">Thêm thức uống mới｜新品</a>
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
                @forelse ($drinks as $drink)
                    <tr>
                        <th scope="row">{{ $loop->index }}</th>
                        <td>
                            {{ $drink->drinkType->name }}
                        </td>
                        <td>{{ $drink->drink_name_vn }}</td>
                        <td>{{ $drink->drink_name_jp }}</td>
                        <td>{{ $drink->price }}</td>
                        {{-- <td>{{ $food->status }}</td> --}}
                        <td>
                            @if ($drink->status == 1)
                                <p>Còn</p>
                            @else
                                <p>Hết</p>
                            @endif
                        </td>
                        <td>
                            <img src="{{ Storage::url($drink->image) }}" class="img-fluid" alt="hi">
                        </td>

                        <td>
                            <div class="row">
                                <div class="col-sm">
                                    <form method="POST" action="{{ route('admin.drinks.destroy', ['drink' => $drink]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" title="delete"
                                            style="border: none; background-color:transparent;">
                                            <i class="fas fa-trash fa-lg" style="color: #A9A9A9"></i>
                                        </button>
                                        <a href="{{ route('admin.drinks.edit', ['id' => $drink->id]) }}">
                                            <i class="far fa-edit fa-lg" style="color: #A9A9A9"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>


                        </td>

                        {{-- <td>
                            <form method="POST" action="{{ route('admin.users.destroy', ['user' => $user]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    <i class="fas fa-user-times"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
                                <i class="far fa-edit"></i>
                            </a>

                        </td> --}}
                    </tr>
                @empty
                    <p>Không có tài khoản nào</p>
                @endforelse
            </table>
        </div>
    </body>

@endsection
