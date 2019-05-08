<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    //
    public function index()
    {
        // return view('admin.layouts.master');
        return view("landing");
        // return "murid";
    }

    public function cariguru()
    {
        return view("murid.cariguru");
        
    }

    public function profile()
    {
        return view("murid.profile");
    }

    public function detailguru()
    {
        return view('murid.detailGuru');
    }


    public function checkout()
    {
        return view('murid/detailPesanGuru');
    }

    
}
