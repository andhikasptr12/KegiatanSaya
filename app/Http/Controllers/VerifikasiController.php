<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Register;

class VerifikasiController extends Controller
{
    public function index()
    {
        $verifikasiPembayarans = Register::with('user', 'activity')
                                        ->where('status','pending')
                                        ->latest()
                                        ->paginate(6);
        return view('verifikasi.index', compact('verifikasiPembayarans'));
    }
}
