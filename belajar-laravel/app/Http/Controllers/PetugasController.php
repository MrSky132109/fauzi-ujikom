<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\buku;
use App\Models\user;
use App\Models\kategori;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;

class PetugasController extends Controller
{
    function petugas(){
        echo "hallo petugas";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout </a>";
    }
    function index(){
        return view('petugas/index',[
            'totalbuku' => buku::count(),
            'totaluser' => user::count(),
            'totalkategori' => kategori::count(),
 
        ]);
    }
    function datauser(){
        $user = User::where('role','=','member')->get();
        return view('petugas/user',['userList'=> $user]); ;
    }

    function peminjaman(){
        $user = User::where('role','=','member')->get();
        $buku = buku::all();
        return view('petugas/peminjaman',['userList'=>$user, 'bukuList'=>$buku]);
    }

    function storepeminjaman(request $request){
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(5)->toDateString();
        
        $peminjaman = new peminjaman;
        
        $count = peminjaman::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
        if($count >= 3){
            
            return redirect('petugas/peminjaman')->with('gagal','limit');
        }
        $peminjaman['user_id'] = $request->user_id;
        $peminjaman['buku_id'] = $request->buku_id;
        $peminjaman['rent_date'] = $request->rent_date;
        $peminjaman['return_date'] = $request->return_date;
        $peminjaman->save();
        return redirect('petugas/index');
    }
    
    function riwayatpinjam(){
        
        $riwayat = peminjaman::with(['user','buku'])->get();
        $riwayat = peminjaman::paginate(4);
        return view('petugas/riwayatpinjam',['riwayatList'=>$riwayat,]);
    }
    function adduser(){
        return view('petugas/adduser');
    }

    function storeusers(request $request){
        $user = new User;
        $validate = $request->validate([
            'email'=>['unique:users'],
            'password'=>['required','min:8'],
        ]);
        $user['password'] = Hash::make($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect('petugas/user');
    }
    function edituser(request $request,$id){
        $data1 = user::find($id);
        return view('petugas/edituser',compact('data1'));
    }
    function deleteuser(request $request,$id){
        $user = user::find($id);

        if($user){
            $user->delete();
        }
        return redirect('petugas/user');
    }
    function databuku(){
        $buku = buku::with('kategori');
        $buku = buku::paginate(4);
        $kategori = kategori::all();
       
        return view('petugas/buku',['bukuList'=> $buku]); ;
    }
    function cetakpdf(){
        $peminjaman = peminjaman::with(['user','buku'])->get();
        return view('petugas/cetakpdf', ['peminjamanList'=>$peminjaman]);
    }

     function store(request $request){

        $buku = new buku;
    
        $validate = $request->validate([
            'judul_buku'=>['unique:tb_buku'],
            'image'=>'required|mimes:png,lpg,jpeg',
        ]);
        $image = $request->file('image');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = 'cover-buku/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));

        $buku->image = $filename;
        $buku->judul_buku = $request->judul_buku;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->penerbit = $request->penerbit;
        $buku->genre = $request->genre;
        $buku->penulis = $request->penulis;
        $buku->kategori_id = $request->kategori_id;
        $buku->save();
        return redirect('petugas/buku');
    }
    function create(){
        $kategori = kategori::all();
        return view('petugas/addbuku',['kategoriList'=> $kategori]);
    }
    function edit(request $request,$id){
        $kategori =kategori::all();
        $data = buku::find($id);
        return view('petugas/editbuku',compact('data'),['kategoriList'=> $kategori]);
    }

    function update(request $request,$id){
        
        $validate = $request->validate([
            'image'=>'mimes:png,jpg,jpeg',
        ]);
        if($request->image){
        $image = $request->file('image');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = 'cover-buku/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
        
        $buku['image'] = $filename;
        }
        $buku['judul_buku'] = $request->judul_buku;
        $buku['tahun_terbit'] = $request->tahun_terbit;
        $buku['penerbit'] = $request->penerbit;
        $buku['genre']= $request->genre;
        $buku['penulis'] = $request->penulis;
        $buku['kategori_id'] = $request->kategori_id;
        buku::whereId($id)->update($buku);
        return redirect('petugas/buku');
    }

    function delete(request $request,$id){
        $buku = buku::find($id);

        if($buku){
            $buku->delete();
        }
        return redirect('petugas/buku');
    }
    
    function editpeminjaman(request $request,$id){
        $data1 = peminjaman::find($id);
        $data = buku::all();
        return view('petugas/editpeminjaman',compact('data1'),['bukuList'=> $data]);
    }

    function updatepeminjaman(request $request,$id){

       
        
        $validate = $request->validate([
            
            'user_id'=>['nullable'],
            'buku_id'=>'nullable',
            'rent_date'=>'nullable',
            'renturn_date'=>'nullable',
            
        ]);

        // $peminjaman['user_id'] = $request->user_id;
        // $peminjaman['buku_id'] = $request->buku_id;
        // $peminjaman['rent_date'] = $request->rent_date;
        // $peminjaman['return_date'] = $request->return_date;
        $peminjaman['actual_return_date'] = $request->actual_return_date;
        peminjaman::whereId($id)->update($peminjaman);
        return redirect('petugas/riwayatpinjam');
    }

}
