<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dudi;
use Illuminate\Support\Facades\DB;

class DataDudiController extends Controller
{
    public function index(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        // Search functionality
        $search = $request->get('search');
        $entries = $request->get('entries', 10);
        
        $dudi = Dudi::when($search, function($query) use ($search) {
                return $query->where('nama_dudi', 'like', '%'.$search.'%')
                           ->orWhere('alamat_dudi', 'like', '%'.$search.'%')
                           ->orWhere('jenis_usaha', 'like', '%'.$search.'%')
                           ->orWhere('nama_pimpinan', 'like', '%'.$search.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($entries);
        
        return view('admin.data-dudi', compact('admin', 'dudi', 'search', 'entries'));
    }

    public function create()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.tambah-dudi', compact('admin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dudi' => 'required|string|max:255',
            'alamat_dudi' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'jenis_usaha' => 'required|string|max:255',
            'nama_pimpinan' => 'required|string|max:255',
            'kuota' => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();
            
            Dudi::create([
                'nama_dudi' => $request->nama_dudi,
                'alamat_dudi' => $request->alamat_dudi,
                'no_telp' => $request->no_telp,
                'jenis_usaha' => $request->jenis_usaha,
                'nama_pimpinan' => $request->nama_pimpinan,
                'kuota' => $request->kuota,
                'terisi' => 0,
                'status' => 'tersedia',
            ]);

            DB::commit();
            
            return redirect()->route('admin.data-dudi')->with('success', 'Data DUDI berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menambah data DUDI: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $admin = Auth::guard('admin')->user();
        $dudi = Dudi::findOrFail($id);
        
        return view('admin.edit-dudi', compact('admin', 'dudi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dudi' => 'required|string|max:255',
            'alamat_dudi' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'jenis_usaha' => 'required|string|max:255',
            'nama_pimpinan' => 'required|string|max:255',
            'kuota' => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();
            
            $dudi = Dudi::findOrFail($id);
            
            // Update status jika kuota berubah
            $status = $dudi->status;
            if ($request->kuota < $dudi->terisi) {
                return back()->with('error', 'Kuota tidak boleh kurang dari jumlah yang sudah terisi!');
            }
            
            $dudi->update([
                'nama_dudi' => $request->nama_dudi,
                'alamat_dudi' => $request->alamat_dudi,
                'no_telp' => $request->no_telp,
                'jenis_usaha' => $request->jenis_usaha,
                'nama_pimpinan' => $request->nama_pimpinan,
                'kuota' => $request->kuota,
                'status' => $request->kuota > $dudi->terisi ? 'tersedia' : 'penuh',
            ]);

            DB::commit();
            
            return redirect()->route('admin.data-dudi')->with('success', 'Data DUDI berhasil diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memperbarui data DUDI: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            
            $dudi = Dudi::findOrFail($id);
            
            // Cek jika DUDI sudah digunakan di permohonan PKL
            if ($dudi->terisi > 0) {
                return redirect()->route('admin.data-dudi')->with('error', 'Tidak dapat menghapus DUDI yang sudah memiliki siswa!');
            }
            
            $dudi->delete();

            DB::commit();
            
            return redirect()->route('admin.data-dudi')->with('success', 'Data DUDI berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.data-dudi')->with('error', 'Gagal menghapus data DUDI: ' . $e->getMessage());
        }
    }
}