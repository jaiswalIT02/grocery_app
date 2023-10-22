<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function login(){
        // return "Hii Wavy";
        return view('auth/login');
    }
    public function doLogin(){
        //print_r('hello');
    }

    public function admin(){
        return view('auth/admin');
    }
}
