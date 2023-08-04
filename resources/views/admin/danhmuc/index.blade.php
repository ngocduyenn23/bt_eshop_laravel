<x-admin_layout title="danh muc">
    <h1>Danh sách danh mục</h1>
    <div>
        <a href="{{ route('admin.danhmuc.create') }}" class="btn btn-primary my-2">Thêm mới danh mục</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ngày update</th>
                    <th>Ngày Tạo</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ten_danh_muc }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.danhmuc.edit', ['id' => $item->id]) }}" class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('admin.danhmuc.destroy', ['id' => $item->id]) }}" method="post"
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
