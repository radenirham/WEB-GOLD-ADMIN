<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users=User::all();
        $store=Store::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.user.index', compact('users', 'store'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $store=Store::all();
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.user.add ',compact('store'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
		 	'password'=>'required'
		 ]);
                $store_id=NULL;
                if($request->has('store')){
                    $store_id=$request->store;
                }
                $user = [
                    'id' => uniqid('SGU'),
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "store_id" =>$store_id,
                    "password" => bcrypt($request->password),
                ];
                DB::table("users")->insert($user);
                
            $users=User::all();
            $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Index"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
            Toastr::success('Success Create Data user');
            return view('pages.user.index', compact('users'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    
        
    }

    public function edit($id,Request $request)
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Edit"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        
    	$data = User::find($id);
    	return view('pages.user.edit',compact('data'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
        
    }

    public function update(Request $request)
    {
        
    	$request->validate([
		 	'name'=>'required',
		 	'email'=>'required',
            'phone'=>'required',
		 ]);
    	
    	$user = User::find($request->id);
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->phone = $request->phone;
        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        Toastr::success('Success Update Data user');
        return redirect()->route('admin.user')->with('toast_success','Data Successfully Updated');
        
    }

    public function destroy($id)
    {
        
        $user = User::where('id',$id)->first();
        $user->delete();
        
        return back()->with('toast_success','Data Deleted');
    }

}
