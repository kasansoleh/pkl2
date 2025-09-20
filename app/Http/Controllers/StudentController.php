<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(50);
        return view('admin.students.index', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'class' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'class' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}