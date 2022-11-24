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
use Storage;

class BannerController extends Controller
{

    public function index()
    {
        $banner=Banner::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Banner"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.banner.index', compact('banner'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Banner"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.banner.add ', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'banner_file' => 'required',
            'tittle' => 'required',
            'desc' => 'required',
            'from' => 'required',
            'to' => 'required',
		 ]);
        
        $from=date_create($request->from);
        $to=date_create($request->to);
        $path_banner = Storage::disk('s3')->put('images', $request->file('banner_file'));
        $path_banner = Storage::disk('s3')->url($path_banner);

        $banner_data=[
            'bnr_tittle' => $request->tittle,
            'bnr_img' => $path_banner,
            'bnr_status' => 'Active',
            'bnr_desc' => $request->desc,
            'bnr_link' => $path_banner,
            'bnr_from' => date("Y-m-d H:i:s", $from),
            'bnr_to' => date("Y-m-d H:i:s", $to),
        ];

        DB::table('banner')->insert($banner_data);
        Toastr::success('Success Add Data Banner');
        return redirect()->route('admin.banner')->with('toast_success','Data Successfully Upload');
    
        
    }

    public function destroy($id)
    {
        
        $banner = Banner::where('bnr_id',$id)->first();
        $banner->delete();
        
        return back()->with('toast_success','Data Deleted');
    }

}
