<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
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

    public function destroy($id)
    {
        
        $store = Store::where('STORE_ID',$id)->first();
        $store->delete();
        
        return back()->with('toast_success','Data Deleted');
    }

}
