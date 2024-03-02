<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Dummykategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'kategori'=>'Novel',
            ],
           
            [
                'kategori'=>'Sejarah',
            ],
           
            [
                'kategori'=>'Religi',
            ],
           
            [
                'kategori'=>'Komik',
            ],
            [
                'kategori'=>'Self Improvment',
            ],
           
        ];
        foreach($userData as $key => $value){
            kategori::create($value);
    }
}
}
