<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table="peminjaman";

    protected $fillabel = [
        'user_id', 'buku_id', 'rent_date'. 'return_date'
    ];
    public function buku(){
        return $this->belongsTo(buku::class,'buku_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
