<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    //
    public function index(){
        return view('admin.verifikasiakun');
    }
}
