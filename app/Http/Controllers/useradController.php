<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class useradController extends Controller
{
    //
    public function index(){
    	return view('admin.home.homeuser');
    }
    
    public function getlaixe(){
    	return view('admin.home.laixe');
    }

    public function getlogin(){
    	return view('admin.login');
    }

    public function postlogin(Request $request){
    	//dd($request->all());
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

    public function getcreate(Request $request){
    	return view('create');
    }

    public function postcreate(Request $request){
    	 	$user = new User;
        	$user->email = $request->email;
        	$user->password = Hash::make($request->password);
        	$user->save();
        	return redirect('create');
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
