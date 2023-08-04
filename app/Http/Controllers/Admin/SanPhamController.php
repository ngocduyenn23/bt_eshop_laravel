<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SanPham::orderBy("id","desc")->paginate(4);
        return view("admin.sanpham.index")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.sanpham.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SanPham::findOrFail($id);
        return view("admin.sanpham.edit", compact("data"));
    }

    public function upsert(Request $request, $id = null){
        $data= $request->all();
        unset($data["_token"]);

        //trường hợp thêm mới
        if($id == null){
            $filename = "";
            $file = $request->file("anh_bia");
            if(!empty ($file)){
                //tạo tên file ngẫu nhiên để tránh trùng tên, gây lỗi
                $filename = $file->hashname();
                //lưu ở thư mục pucblic với tên file vừa tạo
                $file->storeAs("/files",$filename);    //lưu trong thư mục store
                $filename = "/files/" . $filename;
            }
            $data["anh_bia"] = $filename;
        }
        SanPham::updateOrCreate(["id"=>$id], $data);

        return redirect()
            ->route("admin.sanpham.index")
            ->with("success_msg","thêm sản phẩm thành công");
    }

    
    private function customaValidate(Request $request){
        $rules = [
            "san_pham"=>"required|min:3|max:100"  //not null 
        ];
        $request->validate($rules);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dm = SanPham::findOrFail($id);
        $san_pham = $dm->san_pham;
        SanPham::findOrFail($id);
        SanPham::destroy($id);
        return redirect()
        ->back()->with("success_msg","Đã xóa sản phẩm '$san_pham' thành công");
    }
}
