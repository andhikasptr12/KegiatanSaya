<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekKegiatanController extends Controller
{
    public function index()
        {
            return view('cek_kegiatan.index');
        }
}
