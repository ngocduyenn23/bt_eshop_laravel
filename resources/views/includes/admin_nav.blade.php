<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{ route("admin.danhmuc.index")}}>Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{ route("admin.sanpham.index")}}>Sản phẩm</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <span class="nav-link">xin chào {{ Auth::User()->name }}</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route("account.logout")}}">Đăng xuất</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route("account.register")}}">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route("account.login")}}">Đăng nhập</a>
                </li>
                @endif
            </ul>
           
        </div>
    </div>
</nav>