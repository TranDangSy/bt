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
    	return view('admin.home.laixe1');
    }

    public function getchitiet(){
        return view('admin.home.chitiet');
    }

    public function getlogin(){
    	return view('admin.login');
    }

    public function getcontact(){
        return view('admin.home.contact');
    }

    public function getadmin(){
        return view('admin.user.admin1');
    }

    public function getchitietad(){
        return view('admin.user.chitietadmin');
    }

    public function postupdate(){
        return view('widget.updatelogin');
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
            $user->name = $request->name;
            $file = $request->useravatar;
            $file->move('upload',$file->getClientOriginalName());
            $user->useravatar = $file;
        	$user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->userlevel = $request->level;
            $user->userstatus = $request->status;
        	$user->save();
        	return redirect('create')->with('thongbao','Tạo tài khoản thành công hãy đăng nhập');
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
