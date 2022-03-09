<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class PesertaController extends Controller
{
    public function index()
    {
        $registers = Register::with('user','activity')
                                ->where('status','peserta')
                                ->latest()
                                ->paginate(5);
        return view('verifikasi.peserta.index', compact('registers'));
    }

    public function store(Request $request, $id)
    {

        $register = Register::findOrFail($id);

        $register->update([
            'status' => 'peserta'
        ]);

        return redirect()->back();
    }
}
