<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAdddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Usuario teste1",
            "email" => "usuarioteste1@gmail.com.br",
            "password" => Hash::make("123456"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua dos testes, n1",
        ]);
    }
}
