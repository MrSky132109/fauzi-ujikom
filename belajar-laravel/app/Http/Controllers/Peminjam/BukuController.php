<?php

namespace App\Http\Controllers\Peminjam;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        $kategori = kategori::all();
        if ($request->kategori){

        }else{
            
        }
        return view("peminjam/buku/index",['kategoriList'=> $kategori]);
    }
}
