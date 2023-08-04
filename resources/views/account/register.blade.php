<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'Học Laravel' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{ $css ?? '' }}
</head>

<body>

    {{-- thanh menu ở admin --}}
    @include('includes/admin_nav')

    <div class="container">

        @if (!empty(session('success_msg')))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <h2>Đăng ký tài khoản</h2>
                <form action="{{route('account.save')}}" method="post">
                    @csrf
                    <x-app-input name="name" label="Họ và tên"/> 
                    <x-app-input name="email" type="email" label="email"/> 
                    <x-app-input name="password" type="password" label="mật khẩu" /> 
                    <x-app-input name="cf_password" type="password" label="nhập lại mật khẩu" /> 
                    
                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-success">Đăng ký tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  
</body>

</html>
