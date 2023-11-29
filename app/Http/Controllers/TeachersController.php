<?php

namespace App\Http\Controllers;
use App\Models\Teachers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        return view('teachers.all' , [
            "title" => "Teachers",
            "teachers" => Teachers::all()
        ]);
    }

    public function showDetail($id) {
        $teacher = Teachers::find($id);
    
        
        if (!$teacher) {
            abort(404); 
        }
    
        return view('teachers.detail', ['teacher' => $teacher]);
    }     
    
}