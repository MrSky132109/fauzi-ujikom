<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TbBukuController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\Peminjam\BukuController;

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

Route::get('/', BukuController::class);


Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class,'index'])->name('login');
    Route::post('/login', [SesiController::class,'login']);
});
Route::get('/home',function(){
    return redirect('/default');
});

Route::middleware(['auth'])->group(function(){
    //default
    Route::get('/default',[DefaultController::class,'index']);
    Route::get('/default/deny',[DefaultController::class,'deny']);
    //admin
    Route::get('/admin/index',[AdminController::class,'index'])->middleware('userAkses:admin');
    Route::get('/admin/table',[AdminController::class,'table'])->middleware('userAkses:admin');
    Route::get('/admin/buku',[AdminController::class,'databuku'])->middleware('userAkses:admin');
    Route::get('/admin/user',[AdminController::class,'datauser'])->middleware('userAkses:admin');
    Route::get('/admin/kategori',[AdminController::class,'datakategori'])->middleware('userAkses:admin');
    Route::get('/admin/add',[AdminController::class,'create'])->middleware('userAkses:admin');
    Route::get('/admin/adduser',[AdminController::class,'adduser'])->middleware('userAkses:admin');
    Route::get('/admin/addkategori',[AdminController::class,'addkategori'])->middleware('userAkses:admin');
    Route::post('/admin/inputuser',[AdminController::class,'storeusers'])->middleware('userAkses:admin');
    Route::post('/admin/inputkategori',[AdminController::class,'storekategori'])->middleware('userAkses:admin');
    Route::post('/admin/inputbuku',[AdminController::class,'store'])->middleware('userAkses:admin');
    Route::get('/admin/editbuku/{id}',[AdminController::class,'edit'])->name('admin.edit')->middleware('userAkses:admin');
    Route::get('/admin/edituser/{id}',[AdminController::class,'edituser'])->name('admin.edituser')->middleware('userAkses:admin');
    Route::get('/admin/editkategori/{id}',[AdminController::class,'editkategori'])->name('admin.editkategori')->middleware('userAkses:admin');
    Route::put('/admin/updatebuku/{id}',[AdminController::class,'update'])->name('admin.update')->middleware('userAkses:admin');
    Route::put('/admin/updateuser/{id}',[AdminController::class,'updateuser'])->name('admin.updateuser')->middleware('userAkses:admin');
    Route::put('/admin/updatekategori/{id}',[AdminController::class,'updatekategori'])->name('admin.updatekategori')->middleware('userAkses:admin');
    Route::delete('/admin/deletebuku/{id}',[AdminController::class,'delete'])->name('admin.delete')->middleware('userAkses:admin');
    Route::delete('/admin/deleteuser/{id}',[AdminController::class,'deleteuser'])->name('admin.deleteuser')->middleware('userAkses:admin');
    Route::delete('/admin/deletekategori/{id}',[AdminController::class,'deletekategori'])->name('admin.deletekategori')->middleware('userAkses:admin');
    //petugas
    Route::get('/petugas/petugas',[PetugasController::class,'petugas'])->middleware('userAkses:petugas');
    Route::get('/petugas/index',[PetugasController::class,'index'])->middleware('userAkses:petugas');
    Route::get('/petugas/user',[PetugasController::class,'datauser'])->middleware('userAkses:petugas');
    Route::get('/petugas/peminjaman',[PetugasController::class,'peminjaman'])->middleware('userAkses:petugas');
    Route::get('/petugas/riwayatpinjam',[PetugasController::class,'riwayatpinjam'])->middleware('userAkses:petugas');
    Route::post('/petugas/inputpeminjaman',[PetugasController::class,'storepeminjaman'])->middleware('userAkses:petugas');
    Route::get('/petugas/adduser',[PetugasController::class,'adduser'])->middleware('userAkses:petugas');
    Route::get('/petugas/editpeminjaman/{id}',[PetugasController::class,'editpeminjaman'])->name('petugas.editpeminjaman')->middleware('userAkses:petugas');
    Route::post('/petugas/inputuser',[PetugasController::class,'storeusers'])->middleware('userAkses:petugas');
    Route::get('/petugas/edituser/{id}',[PetugasController::class,'edituser'])->name('petugas.edituser')->middleware('userAkses:petugas');
    Route::delete('/petugas/deleteuser/{id}',[PetugasController::class,'deleteuser'])->name('petugas.deleteuser')->middleware('userAkses:petugas');
    Route::get('/petugas/buku',[PetugasController::class,'databuku'])->middleware('userAkses:petugas');
    Route::get('/petugas/cetakpdf',[PetugasController::class,'cetakpdf'])->middleware('userAkses:petugas');
    Route::get('/petugas/add',[PetugasController::class,'create'])->middleware('userAkses:petugas');
    Route::post('/petugas/inputbuku',[PetugasController::class,'store'])->middleware('userAkses:petugas');
    Route::get('/petugas/editbuku/{id}',[PetugasController::class,'edit'])->name('petugas.edit')->middleware('userAkses:petugas');
    Route::put('/petugas/updatebuku/{id}',[PetugasController::class,'update'])->name('petugas.update')->middleware('userAkses:petugas');
    Route::put('/petugas/updatepeminjaman/{id}',[PetugasController::class,'updatepeminjaman'])->name('petugas.updatepeminjaman')->middleware('userAkses:petugas');
    Route::delete('/petugas/deletebuku/{id}',[PetugasController::class,'delete'])->name('petugas.delete')->middleware('userAkses:petugas');
    
    
    //member
    Route::get('/member/index',[MemberController::class,'index'])->middleware('userAkses:member');
    Route::get('/member/riwayatpinjam',[MemberController::class,'riwayatpinjam'])->middleware('userAkses:member');
    Route::get('/member/riwayatulasan',[MemberController::class,'riwayatulasan'])->middleware('userAkses:member');
    Route::get('/member/ulasan',[MemberController::class,'ulasan'])->middleware('userAkses:member');
    Route::post('/member/inputulasan',[MemberController::class,'storeulasan'])->middleware('userAkses:member');
    Route::get('/member/cetakpdf',[MemberController::class,'cetakpdf'])->middleware('userAkses:member');
    Route::post('/member/inputpeminjaman',[MemberController::class,'storepeminjaman'])->middleware('userAkses:member');
    Route::get('/member/peminjaman',[MemberController::class,'peminjaman'])->middleware('userAkses:member');
    
    //logout
    Route::post('/logout',[SesiController::class,'logout']);
    Route::get('/logout',[SesiController::class,'logout']);
    Route::post('admin/logout',[SesiController::class,'logout']);
});

Route::get('/register', [SesiController::class,'register']);
Route::post('/createusers',[SesiController::class,'createusers']);
    