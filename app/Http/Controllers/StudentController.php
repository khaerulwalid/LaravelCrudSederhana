<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nis' => 'required|unique:students',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'notelp' => 'required',
            'email' => 'required|email'
        ]);

        Student::create($validated);

        return redirect()->route('student')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($id) {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'notelp' => 'required',
            'email' => 'required|email'
        ]);

        Student::where('id', $request->id)
            ->update($validated);

        return redirect()->route('student')->with('success', 'Berhasil Ubah data');
    }

    public function destroy($id) {
        Student::find($id)->delete();

        return redirect()->route('student')->with('success', 'Data sudah di Hapus');
    }
}