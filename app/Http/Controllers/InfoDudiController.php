<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoDudiController extends Controller
{
    public function index()
    {
        $siswa = Auth::guard('siswa')->user();
        return view('info-dudi', compact('siswa'));
    }
}