<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'=> 'John Smith',
                'email'=> 'john@mail.com',
                'password'=> '123'
            ],            
            [
                'name'=> 'Samanta Geller',
                'email'=> 'samanta@mail.com',
                'password'=> '123'
            ],
            [
                'name'=> 'Martin Byrd',
                'email'=> 'marty@mail.com',
                'password'=> '123'
            ],
        ]);
    }
}
