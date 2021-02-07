<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }

    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        margin-top: 15px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: #43A047;
    }

    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }

    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }

    .form .register-form {
        display: none;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }

    .container:before,
    .container:after {
        content: "";
        display: block;
        clear: both;
    }

    .container .info {
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }

    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #EF3B3A;
    }

    body {
        background: #76b852;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>

<body>
    <div class="login-page">
        <div class="form">
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-success">{{ session('error') }}</p>
            @endif
            <form action="{{ route('admin.drinks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <input type="text" placeholder="Loại món" name="name">
                --}}
                <select class="form-control" name="drink_types" id="">
                    @forelse ($drink_types as $drink_type)
                        <option value="{{$drink_type->id}}">{{$drink_type->name}}</option>
                    @empty
                        <option value="">Không tìm thấy</option>
                    @endforelse
                </select>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="Tên thức uống tiếng việt" name="drink_name_vn">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="Tên thức uống tiếng nhật" name="drink_name_jp">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="number" placeholder="Giá" name="price">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-check" style="display: flex; padding-left:0;">
                    <input type="checkbox" class="form-check-input" style="padding-top:0;
                    margin-top: 7px;" name="status">
                    <p>Tick vào nếu còn</p>
                </div>
                {{-- <input type="text" placeholder="Tình trạng" name="name"> --}}
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <button>Đăng</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>
