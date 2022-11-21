<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{

    public function index()
    {
        $users=User::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.user.index', compact('users'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.user.add ', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'name'=>'required',
            'email'=>'required',
		 	'password'=>'required'
		 ]);
        
           
                $user = [
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => bcrypt($request->password),
                ];
                DB::table("users")->insert($user);
                
            $users=User::all();
            $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Index"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
            return view('pages.user.index', compact('users'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    
        
    }

    public function destroy($id)
    {
        
        $user = User::where('id',$id)->first();
        $user->delete();
        
        return back()->with('toast_success','Data Deleted');
    }

}
