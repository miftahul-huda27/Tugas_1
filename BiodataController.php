<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return "selamat belajar yaa!!!";
    }

    public function ambilfile()
    {
        return view('ambilfile');
    }

}
