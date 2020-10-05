<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\User;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'contactOne' => Str::random(10),
        //     'password' => Hash::make('password'),
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now()
        // ]);

        // Inserção por meio da model

        User::create([
        'name' => 'Carlos Henrique',
        'email' => 'devcarloshenrique@gmail.com',
        'contactOne' => '(85) 99424-8937',
        'password' => Hash::make('password'),
        ]);
    }
}
