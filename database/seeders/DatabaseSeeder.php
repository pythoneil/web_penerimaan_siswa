<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin12@gmail.com',
            'usertype' => 1,
            'password'=> Hash::make('123')

            
        ],
    [
            'name' => 'malvin',
            'email' => 'malvin12@gmail.com',
            'usertype' => 0,
            'password'=> Hash::make('123'),
    ]);
    }
}
