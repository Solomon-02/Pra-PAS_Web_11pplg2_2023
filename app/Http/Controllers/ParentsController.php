<?php

namespace App\Http\Controllers;
use App\Models\Parents; // Pastikan menggunakan model Parents

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index(){
        return view('parents.all', [
            "title" => "Parents",
            "parents" => Parents::all() // Ganti Students dengan Parents
        ]);
    }

    public function showDetail($id) {
        $parent = Parents::find($id); // Ganti Students dengan Parents
    
        // Pastikan orang tua ditemukan sebelum menampilkan detail
        if (!$parent) {
            abort(404); // Tampilkan halaman 404 jika orang tua tidak ditemukan
        }
    
        return view('parents.detail', ['parent' => $parent]); // Ganti students.detail dengan parents.detail
    }     
    
}
