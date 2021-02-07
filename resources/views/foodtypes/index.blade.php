@extends('layouts.app')

@section('content')

<body>
    <div style="margin : 50px">
        <table class="table">
            <thead>
                @if (session('message'))
                    <p class="text-success">{{ session('message') }}</p>
                @endif
                @if (session('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên loại thức ăn</th>
                    <th scope="col">Hành động</th>
                </tr>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">食べ物のタイプ</th>
                    <th scope="col">アクション</th>
                </tr>

            </thead>
            <tbody>
                <h2>Danh sách các loại món</h2>
                <h2>食べ物各種</h2>
                <div class="admin__button">
                    <a class="btn btn-outline-secondary" style="margin-bottom: 15px"
                        href="{{ route('admin.foodtypes.create') }}">Thêm loại thức ăn mới｜新品</a>
                    <a class="btn btn-outline-secondary" style="margin-bottom: 15px" href="{{ route('index') }}">Xem
                        trang
                        chủ｜ホーム</a>
                        @forelse ($foodtypes as $foodtype)
                        <tr>
                            <th scope="row">{{ $loop->index }}</th>
                            <td>{{ $foodtype->name }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm">
                                        <form method="POST" action="{{ route('admin.foodtypes.destroy', ['foodtype' => $foodtype]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                                <i class="fas fa-trash fa-lg" style="color: #A9A9A9"></i>
                                            </button>
                                            <a href="{{ route('admin.foodtypes.edit', ['id' => $foodtype->id]) }}">
                                                <i class="far fa-edit fa-lg" style="color: #A9A9A9"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>Không có tài khoản nào</p>
                    @endforelse
                </div>
            </tbody>
        </table>
    </div>
</body>

@endsection
