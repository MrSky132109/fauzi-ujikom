<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\User;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
  
    
    function index(){
       return view('admin/index',[
           'totalbuku' => buku::count(),
           'totaluser' => user::count(),
           'totalkategori' => kategori::count(),

       ],
       );
    }
    
    function table(){
        return view('admin/table');
    }
    function databuku(){
        $buku = buku::with('kategori');
        $buku = buku::paginate(4);
        $kategori = kategori::all();
       
        return view('admin/buku',['bukuList'=> $buku]); ;
    }
    function datauser(){
        $user = User::paginate(5);
        return view('admin/user',['userList'=> $user]); ;
    }
    function datakategori(){
        $kategori = kategori::paginate(5);
        return view('admin/kategori',['kategoriList'=> $kategori]); 
    }

    function create(){
        $kategori = kategori::all();
        return view('admin/addbuku',['kategoriList'=> $kategori]);
    }
    function adduser(){
        return view('admin/adduser');
    }
    function addkategori(){
        return view('admin/addkategori',);
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
        return redirect('admin/buku');
    }

    function storeusers(request $request){
        $user = new User;
        $validate = $request->validate([
            'email'=>['unique:users'],
            'password'=>['required','min:8'],
            // 'image'=>'required|mimes:png,lpg,jpeg',
        ]);
        // $image = $request->file('image');
        // $filename = date('Y-m-d').$image->getClientOriginalName();
        // $path = 'foto-user/'.$filename;

        // Storage::disk('public')->put($path,file_get_contents($image));

        $user['password'] = Hash::make($request->password);
        // $user->image = $filename;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect('admin/user');
    }
    function storekategori(request $request){
        $kat = new kategori;
        $validate = $request->validate([
            'kategori'=>['unique:kategori'],
        ]);
        $kat->kategori = $request->kategori;
        $kat->save();
        return redirect('admin/kategori');
    }
    
    function edit(request $request,$id){
        $kategori =kategori::all();
        $data = buku::find($id);
        return view('admin/editbuku',compact('data'),['kategoriList'=> $kategori]);
    }
    function edituser(request $request,$id){
        $data1 = user::find($id);
        return view('admin/edituser',compact('data1'));
    }
    function editkategori(request $request,$id){
        $data1 = kategori::find($id);
        return view('admin/editkategori',compact('data1'));
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
        $buku['status'] = $request->status;
        $buku['judul_buku'] = $request->judul_buku;
        $buku['tahun_terbit'] = $request->tahun_terbit;
        $buku['penerbit'] = $request->penerbit;
        $buku['genre']= $request->genre;
        $buku['penulis'] = $request->penulis;
        $buku['kategori_id'] = $request->kategori_id;
        buku::whereId($id)->update($buku);
        return redirect('admin/buku');
    }
    function updateuser(request $request,$id){
    
        $validate = $request->validate([
            
            'password'=>['nullable','min:8'],
        ]);
        if($request->password){
            $user['password'] = Hash::make($request->password);
            
        }
        $user['status'] = $request->status;
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['role'] = $request->role;
        user::whereId($id)->update($user);
        return redirect('admin/user');
    }
    function updatekategori(request $request,$id){
    
        $validate = $request->validate([
            
            'kategori'=>['unique:kategori'],
        ]);
        $user['kategori'] = $request->kategori;
        kategori::whereId($id)->update($user);
        return redirect('admin/kategori');
    }
    
    function delete(request $request,$id){
        $buku = buku::find($id);

        if($buku){
            $buku->delete();
        }
        return redirect('admin/buku');
    }
    function deleteuser(request $request,$id){
        $user = user::find($id);

        if($user){
            $user->delete();
        }
        return redirect('admin/user');
    }
    function deletekategori(request $request,$id){
        $user = kategori::find($id);

        if($user){
            $user->delete();
        }
        return redirect('admin/kategori');
    }
}
