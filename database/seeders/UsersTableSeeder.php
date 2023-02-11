<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name'=>'alaa',
        'email'=>'alaashawa1994@gmail.com',
        'password' => Hash::make('123456'),

      ]);

      User::create([
        'name'=>'moh',
        'email'=>'moh@gmail.com',
        'password' => Hash::make('123456'),

      ]);
    }
}
