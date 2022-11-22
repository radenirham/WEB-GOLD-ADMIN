<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gold;
use App\Models\Manufacture;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use File;

class ManufactureController extends Controller
{

    public function index()
    {
        $manufacture=Manufacture::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Gold"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.manufacture.index', compact('manufacture'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $manufacture=Manufacture::all();
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.manufacture.add ', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'name'=>'required',
            'status'=>'required',
		 ]);

            try{
                $manufacture = [
                    "name" => $request->name,
                    "status" => $request->status,
                ];
                DB::table("manufacture")->insert($manufacture);
                Toastr::success('Success Create Data Manufaktur');
                return redirect()->route('admin.manufacture');
            }catch (\Exception $e) {
                return back();
                Toastr::error('Failed Create Data Manufaktur');
            }
        
    }

    public function destroy($id)
    {
        
        $manufacture = Manufacture::where('id',$id)->first();
        $manufacture->delete();
        Toastr::success('Data Deleted');
        return back();
    }

}
