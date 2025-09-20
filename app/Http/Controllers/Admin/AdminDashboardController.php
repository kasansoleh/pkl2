<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PermohonanPkl;
use App\Models\Siswa;
use App\Models\Admin;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        
        // Data statistik
        $totalPengajuan = PermohonanPkl::count();
        $pengajuanDiterima = PermohonanPkl::where('status', 'diterima')->count();
        $pengajuanDitolak = PermohonanPkl::where('status', 'ditolak')->count();
        $pengajuanMenunggu = PermohonanPkl::where('status', 'menunggu')->count();
        
        $totalSiswa = Siswa::count();
        $totalAdmin = Admin::count();

        return view('admin.dashboard', compact(
            'admin',
            'totalPengajuan',
            'pengajuanDiterima',
            'pengajuanDitolak',
            'pengajuanMenunggu',
            'totalSiswa',
            'totalAdmin'
        ));
    }
}