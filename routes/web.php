<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('/studentdelete/{id}', [StudentController::class, 'destroy'])->name('student.delete');

Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::post('/student/{id}', [StudentController::class, 'update'])->name('student.update');