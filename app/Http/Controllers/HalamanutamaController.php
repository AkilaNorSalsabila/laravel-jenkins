<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanutamaController extends Controller
{
    public function index()
    {
        return view('halamanutama'); //menampilkan halaman home
    } 
}
