<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login',[
            'title'=>'Trang Login'
        ]);
    }
    public function login(Request $request){
        //xử lý việc đăng nhập
        //echo "xử lý login";
        //dd($request->input());
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]))
        {
            return redirect()->route('admin');
        }
        Session()->flash('error','Email hoặc mật khẩu không chính xác');
        return redirect()->back();
    }
}
