<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DetailController extends Controller
{
    public function index(){
        $supplier = DB::table("supplier_0071")->get();
        return view("detail", ['supplier' => $supplier]);
    }
}
