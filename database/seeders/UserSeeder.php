<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker  = Facker::create();
        foreach (range(1,10) as $index){
            DB::table('users')->insert([
                'name'=>$facker->firstNameMale,
                'email'=>$facker->email,
                'password'=>Hash::make($facker->sentence(5))

            ]);

        }
    }
}
