<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function login()
    {
        $pageConfigs = ['bodyCustomClass' => 'login-bg', 'isCustomizer' => false];

        return view('/auth/login', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function register()
    {
        $pageConfigs = ['bodyCustomClass' => 'register-bg', 'isCustomizer' => false];

        return view('/auth/register', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            Toastr::success('Success Logged In');
            return redirect()->route('admin.dashboard');
        }else{
            Toastr::error('Credential doesnt match!');
            
            return back();
        }
    }

    public function submit_regis(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required'
        ]);

        try{
            $admin = [
                    "name" => $request->name,
                    "email" => $request->email,
                    "role" => 'admin',
                    "password" => bcrypt($request->password),
                ];
                DB::table("admins")->insert($admin);
                Toastr::success('Success Register Admin');

                return redirect()->route('loginadmin');
        }catch (\Exception $e) {
            return redirect()->route('regisadmin');
            Toastr::error('Failed Register Admin');
        }
        
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Toastr::error('success logged out');
        
        return redirect()->route('loginadmin');
    }
}
