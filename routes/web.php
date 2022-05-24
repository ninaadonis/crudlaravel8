<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});


Route::get('/tamu', [EmployeeController :: class, 'index'])->name('tamu');

Route::get('/tambahtamu', [EmployeeController :: class, 'tambahtamu'])->name('tambahtamu');
Route::post('/insertdata', [EmployeeController :: class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController :: class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController :: class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController :: class, 'delete'])->name('delete');

// export PDF
Route::get('/exportpdf', [EmployeeController :: class, 'exportpdf'])->name('exportpdf');

// export Excel
Route::get('/exportexcel', [EmployeeController :: class, 'exportexcel'])->name('exportexcel');

// import Excel
Route::get('/importexcel', [EmployeeController :: class, 'importexcel'])->name('exportexcel');