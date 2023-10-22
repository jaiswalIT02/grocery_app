<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;          
class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("/admin")->with('success', 'Login success');
        }
        return redirect("/")->with('error','You have entered invalid credentials');
    }
    public function admin(){
        return view('auth/admin');
    }
    public function user(){
        $users = User::all();
        return view('auth/user',['data'=>$users]);
    }
    public function addUser(){
        $role = DB::select('select * from user_role');
        return view('auth/add_user',['roles'=>$role]);
    }

    public function storeUser(Request $request){
        // echo '<pre>';
        // print_r($request->all());die;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required',
            'user_type' => 'required',
        ]);
        User::create($request->all());
        return redirect()->back()
                         ->with('success','User added successfully.');
    }
    public function deleteUser(User $id){
        $id->delete();
        return redirect()->route('user')
                        ->with('success','User deleted successfully');
      
    }
    public function userRole(){
        $roles = UserRole::all();
        return view('auth/user_role',['data'=>$roles]);
    }
    public function addUserRole(){
        return view('auth/add_user_role');
    }
    public function storeUserRole(Request $request){
        $request->validate([
            'role' => 'required'
        ]);
        UserRole::create($request->all());
        return redirect()->back()
                         ->with('success','Role added successfully.');
    }

    public function checkLogin(){
        if(Auth::check())
        {
            return View::make('auth.admin');
        }

        return Redirect::route('/')->withInput()->with('errmessage', 'Please Login to access restricted area.');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
