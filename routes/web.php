<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
Route::get('new-student', [StudentController::class, 'createStudent']);
Route::post('add-student', [StudentController::class, 'addStudent']);
Route::get('student-edit/{id}', [StudentController::class, 'editStudent']);
Route::post('edit-student', [StudentController::class, 'updateStudent']);
Route::get('student-delete/{id}', [StudentController::class, 'deleteStudent']);

