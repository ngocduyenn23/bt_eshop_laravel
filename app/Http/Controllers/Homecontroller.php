<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        // $data = DB::table('san_phams')->orderBy("id","desc");
        $data = SanPham::orderBy("id","desc")->get();
        return view('welcome')->with('data', $data);
    }
   
    public function contact()
    {
        $data = SanPham::orderBy("id","desc")->get();
        return view('contact')->with('data', $data);
    }

    public function detail(Request $request)
    {
        $data = SanPham::where('id', $request->id)->first();
        
        return view("detail")->with('data', $data);

    }
}
