@extends('layouts.app')

@section('content')

<body>
    <div style="margin : 50px">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Tên món tiếng việt</th>
                    <th scope="col">Tên món tiếng nhật</th>
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
                <h2>Danh sách các món ăn</h2>
                <h2>食べ物のリスト</h2>
                <div class="admin__button">
                    <a class="btn btn-outline-secondary" style="margin-bottom: 15px"
                        href="{{ route('admin.foods.create') }}">Thêm món mới｜新品</a>
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
            @forelse ($foods as $food)
                <tr>
                    <th scope="row">{{ $loop->index }}</th>
                    <td>
                       {{ $food->foodTypes->name}}
                    </td>
                    <td>{{ $food->foodnamevn }}</td>
                    <td>{{ $food->foodnamejp }}</td>
                    <td>{{ $food->price }}</td>
                    {{-- <td>{{ $food->status }}</td> --}}
                    <td>
                        @if ($food->status == 1)
                            <p>Còn</p>
                        @else
                            <p>Hết</p>
                        @endif
                    </td>
                    <td>
                        <img src="{{ Storage::url($food->image) }}" class="img-fluid" alt="hi">
                    </td>

                    <td>
                        <div class="row">
                            <div class="col-sm">
                                <form method="POST" action="{{ route('admin.foods.destroy', ['food' => $food]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg" style="color: #A9A9A9"></i>
                                    </button>
                                    <a href="{{ route('admin.foods.edit', ['id' => $food->id]) }}">
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
