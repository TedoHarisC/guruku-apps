<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
        return view('guru.dashboard');

    }

    public function profile()
    {
        return view('guru.profile');

    }

    public function bukaKelas()
    {
        return view('guru.formBukaKelas');
    }

}
