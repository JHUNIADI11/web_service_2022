<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//route portofolio
Route::get('/',[ProfileController::class, 'index']);

Route::get('/tentang',[ProfileController::class, 'tentang']);

Route::get('/resume',[ProfileController::class, 'resume']);

Route::get('/portfolio',[ProfileController::class, 'portfolio']);

Route::get('/contact',[ProfileController::class, 'contact']);

Route::view('partial', 'partial/master');

// Route mahasiswa
Route::get('data-mahasiswa',[MahasiswaController::class, 'index']);
Route::get('add-mahasiswa',[MahasiswaController::class, 'create']);
Route::post('save-mahasiswa',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.save-mahasiswa');
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete.mahasiswa');
Route::get('edit-mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::put('edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('update.mahasiswa');

//route blog
Route::get('data-blog',[BlogController::class, 'index']);
Route::get('add-blog',[BlogController::class, 'create']);
Route::post('save-blog',[BlogController::class, 'ambilData'])->name('blog.save-blog');
Route::delete('delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete.blog');
Route::get('edit-blog/{id}/edit', [BlogController::class, 'edit'])->name('edit.blog');
Route::put('edit-blog/{id}', [BlogController::class, 'update'])->name('update.blog');

