<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activity;
use App\Register;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'students' => User::whereHas('roles', function ($q) {
                                    $q->where('roles.name', '=', 'student');
                                })->count(),
            'activitys' => Activity::count(),
            'registers' => Register::Where('status','peserta')->count(),
            'pending' => Register::where('status','pending')->count(),
            'terverifikasi' => Register::where('status','terverifikasi')->count(),
            'delayed' => Register::where(['user_id' => Auth::user()->id, 'status' => 'pending'])
                                ->count(),
            'verified' => Register::where(['user_id' => Auth::user()->id, 'status' => 'terverifikasi'])
                                ->count(),
            'participant' => Register::where(['user_id' => Auth::user()->id, 'status' => 'peserta'])
                                ->count(),
        ];

        return view('home', $data);
    }
}
