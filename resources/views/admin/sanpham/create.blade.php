<x-admin_layout title="thêm mới sản phẩm mới">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Thêm mới sản phẩm</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include("includes/errors")
            <form action="{{route('admin.sanpham.upsert')}}" method="post" enctype="multipart/form-data">
                @csrf
    
                <x-app-input name="san_pham" label="Tên sản phẩm"  />
                <x-app-input type="number" name="gia" label="Giá" />
                <x-app-input name="chi_tiet" label="Chi tiết" />
                <x-app-input type="file" name="anh_bia" label="Ảnh bìa" />
                <x-app-input name="id_nguoi_tao" label="id người tạo" />
                <x-app-select name="id_danh_muc" label="id danh mục" model="DanhMuc" 
                displayMember="ten_danh_muc" valueMember="id" />    {{--selected="6"--}}

                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="thêm mới sản phẩm"/>
                </div>
            </form>
        </div>
    </div>
</x-admin_layout>