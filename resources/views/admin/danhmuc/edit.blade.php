<x-admin_layout title="thêm mới danh mục">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">sửa</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include("includes/errors")
            <form action="{{route('admin.danhmuc.upsert', ["id"=>$data->id]) }}" method="post"> {{--có mảng id thì up--}}
                @csrf
                <div>
                    <label class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" name="ten_danh_muc" value="{{$data->tao_danh_muc}}"/>
                </div>
    
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="cập nhật danh mục"/>
                </div>
            </form>
        </div>
    </div>
</x-admin_layout>