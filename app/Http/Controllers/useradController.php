<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainUser;

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
}
