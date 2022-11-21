<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gold;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class GoldController extends Controller
{

    public function index()
    {
        $golds=Gold::all();
        $breadcrumbs = [
        ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Gold"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.gold.index', compact('golds'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

    public function add()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form"], ['name' => "Add"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.gold.add ', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }

    public function store(Request $request)
    {
        $request->validate([
		 	'weight'=>'required',
            'produced_by'=>'required',
            'fineness'=>'required',
            'manufactured_by'=>'required',
		 	'generate'=>'required'
		 ]);

            $gen_code = "".time();
            $zip_file = $gen_code.'.zip'; // Name of our archive to download
            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        
            for ($i = 0; $i < $request->generate ; $i++) { 
                $gold = [
                    "GOLD_ID" => uniqid("GLD-"),
                    "GOLD_WEIGHT" => $request->weight,
                    "produced_by" => $request->produced_by,
                    "manufactured_by" => $request->manufactured_by,
                    "fineness" => $request->fineness,
                    "GOLD_CREATE_BY" => 'admin',
                    "GOLD_CREATED" => Carbon::now(),
                    "GOLD_SERIAL" => $gen_code,
                ];
                DB::table("golds")->insert($gold);
                $log=[
                    'GOLOG_ID'=>uniqid('GLOG-'),
                    'GOLD_ID'=>$gold['GOLD_ID'],
                    'GOLOG_CREATED'=>date('Y-m-d H:i:s'),
                    'GOLOG_REFF'=>"Generated",
                ];
                DB::table('gold_log')->insert($log);
                QrCode::format('png')->size(1000)->generate($gold['GOLD_ID'], public_path('images/'.$gold['GOLD_ID'].'.png') );

                

                $qr_file = 'images/'.$gold['GOLD_ID'].'.png';
                $zip->addFile(public_path($qr_file), $qr_file);
                

                // We return the file immediately after download
                // return response();

                    
            }
            $zip->close();
            $golds=Gold::all();
            $breadcrumbs = [
                ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Gold"], ['name' => "Index"],
            ];
            //Pageheader set true for breadcrumbs
            $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

            // $this->download_zip($zip_file);
            $filePath = public_path($zip_file);
            $headers = ['Content-Type: application/zip'];
            $fileName = $zip_file;
            Toastr::success('Success Generate Data Emas');
            return response()->download($filePath, $fileName, $headers);
            // if(response()->download($filePath, $fileName, $headers))
            // {
            //     return redirect()->route('admin.gold');
            // }
            // return view('pages.gold.index', compact('golds'), ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
        
    }

    public function destroy($id)
    {
        
        $gold = Gold::where('GOLD_ID',$id)->first();
        $gold->delete();
        Alert::success('Success Title', 'Success Message');
        return back()->with('toast_success','Data Deleted');
    }

}
