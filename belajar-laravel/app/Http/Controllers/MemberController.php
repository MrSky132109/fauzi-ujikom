<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\buku;
use App\Models\ulasan;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    function index(){
        return view('member/index');
    }
    function riwayatpinjam(){
        
        $riwayat = peminjaman::with(['user','buku'])->where('user_id', Auth::user()->id)->get();
        return view('member/riwayatpinjam',['riwayatList'=>$riwayat,]);
    }
    function riwayatulasan(){
        
        $riwayat = ulasan::with(['user','buku'])->where('user_id', Auth::user()->id)->get();
        return view('member/riwayatulasan',['riwayatList'=>$riwayat,]);
    }
    
    function ulasan(){
        $buku = buku::all();
        return view('member/ulasan',[ 'bukuList'=>$buku]);
    }

    function storeulasan(request $request){
        $peminjaman = new ulasan;
        $validate = $request->validate([
            
            'rating'=>['nullable','numeric','max:5'],
        ]);
        $peminjaman['user_id'] = $request->user_id;
        $peminjaman['buku_id'] = $request->buku_id;
        $peminjaman['ulasan'] = $request->ulasan;
        $peminjaman['rating'] = $request->rating;
        $peminjaman->save();
        return redirect('member/index');
    }

    function cetakpdf(){
        $peminjaman = peminjaman::with(['user','buku'])->where('user_id', Auth::user()->id)->get();
        return view('member/cetakriwayatpinjam', ['riwayatList'=>$peminjaman]);
    }

    function storepeminjaman(request $request){
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(5)->toDateString();
        
        $peminjaman = new peminjaman;
        
        $count = peminjaman::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
        if($count >= 3){
            
            return redirect('member/peminjaman')->with('gagal','limit');
        }
        $peminjaman['user_id'] = $request->user_id;
        $peminjaman['buku_id'] = $request->buku_id;
        $peminjaman['rent_date'] = $request->rent_date;
        $peminjaman['return_date'] = $request->return_date;
        $peminjaman->save();
        return redirect('member/index');
    }
    function peminjaman(){
        
        $buku = buku::all();
        return view('member/peminjaman',['bukuList'=>$buku]);
    }
}
