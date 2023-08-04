<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DanhMuc::orderBy ("id")->paginate(5); //2-> mỗi trang 2 dòng
        return view("admin.danhmuc.index")
        ->with("data",$data);
    }
    public function create()
    {
        return view("admin.danhmuc.create");
    }



    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // // thêm mới dữ liệu
    //     // $data = $request->all();
    //     // unset($data["_token"]);
    //     // //ràng buộc dl
    //     // $this->customaValidate($request);
     
    //     // $modell = new DanhMuc($data);
    //     // $modell->save();
    //     // //chuyển về trang có tên to or route 
    //     //  return  redirect()->route("admin.danhmuc.index");
    //     // // return redirect()->to("/");
    // }

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
        $data = DanhMuc::findOrFail($id);
        return view("admin.danhmuc.edit")->with("data",$data);
    }

    
    // public function update(Request $request, string $id)
    // {
    //     $inputData = $request->all();
    //     unset($inputData["_token"]);
    //     $this->customaValidate($request);
    //     // Load dữ liệu hiện tại (dữ liệu cũ)
    //     // $data = DanhMuc::findOrFail($id);
    //     // Update data cũ thành mới
    //     // $data->ten_danh_muc = $inputData["ten_danh_muc"];
    //     // $data->save();
    //     return redirect()
    //     ->route("admin.danhmuc.index")
    //     ->with("success_msg",$msg);
    // }

    //dựa vào $id để quyết định là updet hay upsert
    public function upsert(Request $request, $id = null){
        $data= $request->all();
        unset($data["-token"]);
        //ràng buộc dữ liệu

        $this->customaValidate($request);

        DanhMuc::updateOrCreate(["id"=>$id],$data); //nếu id là null xuất ra ko j để xóa
        if($id == null){
            $msg = "thêm danh mục thành công";
        }
        else{
            $msg = "cập nhật danh mục thành công";
        }

            //updet or insert
        // DanhMuc::updateOrCreate(["id"=> $id],$data); //nếu id là null xuất ra ko j để xóa
        return redirect()
            ->route("admin.danhmuc.index")
            ->with("success_msg",$msg);

    }



    //ko có id thì ra file 404
    public function destroy(Request $request, $id)
    {
        $dm = DanhMuc::findOrFail($id);
        $ten_danh_muc = $dm->ten_danh_muc;
        DanhMuc::findOrFail($id);
        DanhMuc::destroy($id);
        return redirect()
        ->back()->with("success_msg","Đã xóa danh mục '$ten_danh_muc' thành công");
    }

    private function customaValidate(Request $request){
        $rules = [
            "ten_danh_muc"=>"required|min:3|max:100"  //not null 
        ];
        $request->validate($rules);
    }
}


   