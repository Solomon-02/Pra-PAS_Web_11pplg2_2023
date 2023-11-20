<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeachersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "nama" => "Solomon",
        "kelas" => "11 PPLG 2",
        "image" => "img/momon.webp"
    ]);
}); 

Route::get('/students/all', [StudentsController::class, 'index'])->name('students.all');
Route::get('/students/detail/{id}', [StudentsController::class, 'showDetail']);
Route::get('/parents/all', [ParentsController::class, 'index']);
Route::get('/parents/detail/{id}', [ParentsController::class, 'showDetail']);
Route::get('/teachers/all', [TeachersController::class, 'index']);
Route::get('/teachers/detail/{id}', [TeachersController::class, 'showDetail']);