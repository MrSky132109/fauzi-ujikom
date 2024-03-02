<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUser extends Seeder
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
                'name'=>'uziadmin',
                'email'=>'fauziadmin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'uzipetugas',
                'email'=>'fauzipetugas@gmail.com',
                'role'=>'petugas',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'uzimember',
                'email'=>'fauzimember@gmail.com',
                'role'=>'member',
                'password'=>bcrypt('123456')
            ],
        ];
        foreach($userData as $key => $value){
            User::create($value);
        }
    }
}
