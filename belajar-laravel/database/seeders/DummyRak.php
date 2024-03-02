<?php

namespace Database\Seeders;

use App\Models\rak;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyRak extends Seeder
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
                'rak'=>'Rak A',

            ],
            [
                'rak'=>'Rak B',

            ],
            [
                'rak'=>'Rak C',

            ],
            [
                'rak'=>'Rak D',

            ],
        ];
        foreach($userData as $key => $value){
            rak::create($value);
        }
    }
}
