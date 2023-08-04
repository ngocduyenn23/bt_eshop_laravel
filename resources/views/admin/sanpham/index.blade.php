<x-admin_layout title="sanpham">
    <h1>Danh sách sản phẩm</h1>
    <div>
        <a href="{{ route('admin.sanpham.create') }}" class="btn btn-primary my-2">Thêm mới sản phẩm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Chi tiết</th>
                    <th>Ảnh bìa</th>
                    <th>ID người tạo</th>
                    <th>ID danh mục</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->san_pham }}</td>
                        <td>{{ number_format($item->gia) }}</td>
                        <td>{{ $item->chi_tiet }}</td>
                        <td><img src="{{ $item->anh_bia }}" alt="img" height="100px" width="100px">
                        </td>
                        <td>{{ $item->id_nguoi_tao }}</td>
                        <td>{{ $item->id_danh_muc }}</td>
                        <td>{{ $item->create_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>{{ $item->danh_mucs->ten_danh_muc ?? ""}}</td>
                        <td>
                            <a href="{{ route('admin.sanpham.edit', ['id' => $item->id]) }}" class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('admin.sanpham.destroy', ['id' => $item->id]) }}" method="post"
                                class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }} {{-- tạo trang --}}
    </div>
</x-admin_layout>
