<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    protected $table="ulasanbuku";

    public function buku(){
        return $this->belongsTo(buku::class,'buku_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
