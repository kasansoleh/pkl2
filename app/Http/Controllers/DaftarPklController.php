<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PermohonanPkl;

class DaftarPklController extends Controller
{
    public function index()
    {
        $siswa = Auth::guard('siswa')->user();
        $permohonan = PermohonanPkl::where('siswa_id', $siswa->id)->get();
        
        return view('daftar-pkl', compact('siswa', 'permohonan'));
    }

    public function create()
    {
        $siswa = Auth::guard('siswa')->user();
        return view('tambah-permohonan', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dudi' => 'required|string|max:255',
            'alamat_dudi' => 'required|string|max:500',
            'kontak_dudi' => 'required|string|max:100',
            'bidang_usaha' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        ]);

        $siswa = Auth::guard('siswa')->user();

        PermohonanPkl::create([
            'siswa_id' => $siswa->id,
            'nama_dudi' => $request->nama_dudi,
            'alamat_dudi' => $request->alamat_dudi,
            'kontak_dudi' => $request->kontak_dudi,
            'bidang_usaha' => $request->bidang_usaha,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status' => 'menunggu',
        ]);

        return redirect()->route('daftar-pkl')->with('success', 'Permohonan PKL berhasil diajukan!');
    }
}