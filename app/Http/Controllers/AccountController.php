<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //đăng ký tài khoản
    public function register(){
        return view("account.register");
    }

    public function save(Request $request){
      //validate dữ liệu
        $this->customValidate($request);

        $data = $request->all();
        unset($data["_token"]);
        unset($data["cf_password"]);
        //hash mk
        $data["password"] = Hash::make($data["password"]);
        $user = new User($data);
        $user->save();
        return redirect()->to("/");
    
    }

    // đăng nhập
    public function login(){
        return view("account.login");
    }

    public function auth(Request $request){
        $data = $request->all();
        unset($data['_token']);


        if(Auth::attempt($data)){
            // đăng nhập thành công
            return redirect()
            ->to("/")
            ->with("success_msg", "Đăng nhập thành công");
        }
        else{
            // đăng nhập thất bại
            return redirect()
            ->route("account.login")
            ->with("error_msg", "Đăng nhập thất bại!");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->to("/");
    }
    



    //tất cả dữ liệu là bắt buộc nhập
      //hộ tên ko dc ít hơn 4 ký tự
      //mật khẩu ko dc ít hơn 4 ký tự
      //mk và xác nhập mk phải giống nhau
      //email phải là duy nhất ko dc tồn tại 2 email giống nhau trong cùng database

    public function customValidate(Request $request){
        $rulue=[
            "name"=>  ["required", "min:4"],
            "password"=> ["required" ],
            "cf_password"=> ["required" , "min:4", "same:cf_password"],
            "email"=> ["required","unique:users,email" ],
        ];
        $request->validate($rulue);
    }

}
