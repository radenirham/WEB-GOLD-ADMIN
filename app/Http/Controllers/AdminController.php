<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        $pageConfigs = ['isCustomizer' => true];
        return view('/pages/dashboard-modern', [
            'pageConfigs' => $pageConfigs
        ]);
    }

}
