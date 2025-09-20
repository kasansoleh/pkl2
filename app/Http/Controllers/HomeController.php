<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Jika user sudah login, ambil data siswa
        $siswa = null;
        if (Auth::guard('siswa')->check()) {
            $siswa = Auth::guard('siswa')->user();
        }
        
        return view('home', compact('siswa'));
    }
}