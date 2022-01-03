<?php
namespace App\Http\Controllers\Backend;
use App\Models\Users
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {

       return view('backend.login');

    }

    public function doLogin(Request $request)
    {


        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->route('home')->with('message','Login successful.');
        }
        // return redirect()->back()->withErrors('Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login')->with('message','Logging out.');
    }
}