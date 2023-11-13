<?php

namespace App\Http\Controllers;
use App\Models\Students;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view('students.all' , [
            "title" => "Students",
            "students" => Students::all()
        ]);
    }

    public function showDetail($id) {
        $student = Students::find($id);
    
        // Pastikan siswa ditemukan sebelum menampilkan detail
        if (!$student) {
            abort(404); // Tampilkan halaman 404 jika siswa tidak ditemukan
        }
    
        return view('students.detail', ['student' => $student]);
    }     
    
}