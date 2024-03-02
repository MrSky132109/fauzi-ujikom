<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    function index(){
        echo "Jika ingin ke halaman awal harap logout terlebih dahulu";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout </a>";
    }
    function deny(){
        echo "Akses di tolak! silahkan gunakan akun sesuai rolenya";
        echo "<br>";
        echo "<a href='/logout'>Logout </a>";
    }
}
