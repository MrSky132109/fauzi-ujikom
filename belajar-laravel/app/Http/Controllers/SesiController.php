<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email isi woy',
            'password.required'=>'password juga isi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role === 'petugas' and Auth::user()->status === 'aktif'){
                return redirect('petugas/index');
            }elseif (Auth::user()->role === 'member' and Auth::user()->status === 'aktif'){
                return redirect('member/index');
            }elseif (Auth::user()->role === 'admin' and Auth::user()->status === 'aktif'){
                return redirect('admin/index');
            }
        }else{
            return redirect('/login')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    
    
    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function createusers(request $request){
        $user = new User;
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $validate = $request->validate([
            'email'=>['unique:users'],
            'password'=>['required','min:8'],
        ]);
        $user['password'] = Hash::make($request->password);
        $user['role'] = $request->role;
        $user->save();
        return redirect('/login');
    }
    function register(){
        return view('register');
    }

    // function create(request $request){
    //     Session::flash('name',$request->name);
    //     Session::flash('email',$request->email);
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email|unique:users',
    //         'password'=>'required|min:8',
    //     ],[
    //         'name.required'=>'Nama isi ya',
    //         'email.required'=>'Email isi ya',
    //         'email.email'=>'isi email yang valid',
    //         'email.unique'=>'email sudah ada, ganti woi',
    //         'password.required'=>'Password isi ya',
    //         'password.min'=>'Password minimal 8',
    //     ]);
    //     $data = [
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'password'=>Hash::make($request->password),
    //     ];
    //     User::create($data);
    // }
}
