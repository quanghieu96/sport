<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VendorsController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //
    public function home(){
        return view('welcome');
    }
    public function getHomeData(){
        $products = DB::table('products')->get();
        return view('admin.vendor.vendor_list',compact('products'));
    }


}
