<?php

namespace App\Models;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class buku extends Model
{
    protected $table ='tb_buku';

    protected $primaryKey ="id";

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','id');
    // }

   
}
