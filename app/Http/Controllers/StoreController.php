<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use App\Models\CreditScoring;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Storage;

class StoreController extends Controller
{

    public function index()
    {
        $stores=Store::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Store"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.store.index', compact('stores'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Store"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.store.add ', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'name'=>'required',
            'address'=>'required',
		 	'latitude'=>'required',
            'longitude'=>'required',
            'image'=>'required',
            'desc'=>'required',
		 ]);
        
                $path_banner = Storage::disk('s3')->put('images', $request->file('image'));
                $path_banner = Storage::disk('s3')->url($path_banner);
                $store = [
                    "STORE_ID" => rand(),
                    "STORE_NAME" => $request->name,
                    "STORE_ADDRESS" => $request->address,
                    "STORE_LAT" => $request->latitude,
                    "STORE_LNG" => $request->longitude,
                    "STORE_IMAGE" => $path_banner,
                    "STORE_STATUS" => 'active',
                    "STORE_DESC" => $request->desc,
                ];
                DB::table("stores")->insert($store);
                
            $stores=Store::all();
            $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Index"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
            return view('pages.store.index', compact('stores'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    
        
    }

    public function scoring($id)
    {
        $scoring=CreditScoring::where('store_id', $id)->with('user')->with('store')->latest()->first();
        $user=User::where('store_id', $id)->first();
        $store=Store::where('STORE_ID', $id)->first();

        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Store"], ['name' => "Credit Scoring"]];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.store.detail', compact('scoring', 'user', 'store'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }

    public function store_scoring(Request $request)
    {
        $request->validate([
		 	'user'=>'required',
            'store'=>'required',
		 	'no_ktp'=>'required',
            'npwp'=>'required',
		 ]);

         $user=User::where('id', $request->user)->first();

         if($user->phone==NULL){
            Toastr::success('Mohon Update No. Telp User');
            return back()->with('toast_success','Mohon Update No. Telp User');
         }

         $score = [
            "user_id" => $request->user,
            "store_id" => $request->store,
            "no_ktp" => $request->no_ktp,
            "npwp" => $request->npwp,
            "name" => $user->name,
            "email" => $user->email,
            "phone"=> $user->phone,
        ];
        DB::table("credit_scoring")->insert($score);
        Toastr::success('Success Update Data Scoring Store');
        return redirect()->route('admin.store')->with('toast_success','Data Successfully Updated');
    }

    public function edit_scoring($id)
    {
        $scoring=CreditScoring::where('id', $id)->with('user')->with('store')->first();

        return response()->json($scoring);
    }

    public function destroy($id)
    {
        
        $store = Store::where('STORE_ID',$id)->first();
        $store->delete();
        
        return back()->with('toast_success','Data Deleted');
    }

}
