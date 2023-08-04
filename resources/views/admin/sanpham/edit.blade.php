<x-admin_layout title=" edit sản phẩm">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Sửa</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include("includes/errors")
            <form action="{{route('admin.sanpham.upsert', ["id"=>$data->id]) }}" method="post"> {{--có mảng id thì up--}}
                @csrf
                <div>
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="san_pham" value="{{$data->san_pham}}"/>
                </div>
    
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="cập nhật sản phẩm"/>
                </div>
            </form>
        </div>
    </div>
</x-admin_layout>