<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\MainUser;
=======
use App\User;
use Illuminate\Support\Facades\Auth;
>>>>>>> parent of d059a12... 3

class useradController extends Controller
{
    //
    public function index(){
    	return view('admin.home.homeuser');
    }
    public function getuser(){
    	$user = MainUser::all();
    	return view('admin.user.index');
    }
    public function getlogin(){
    	return view('admin.login');
    }
<<<<<<< HEAD
=======
    public function postlogin(Request $request){
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required|min:3|max:32'
    	],[
    		'email.required' => 'Bạn chưa nhập email',
    		'password.required' => 'Bạn chưa nhập password',
    		'password.min' => 'Password không được ít hơn 3 kí tự',
    		'password.max' => 'Password không được nhiều hơn 32 kí tự'
    	]);
    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    		{
    		return redirect('admin');
    		}
    	else{
    		return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
    	}
    }
>>>>>>> parent of d059a12... 3
}
