<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data_barang = barang::all();

        return view('barangview',compact('data_barang'));
    }
}
