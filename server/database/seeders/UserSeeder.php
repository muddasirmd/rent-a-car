<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'uuid' => (string) Str::uuid(),
                'name'=> 'John Smith',
                'email'=> 'john@mail.com',
                'password'=> '123'
            ],            
            [
                'uuid' => (string) Str::uuid(),
                'name'=> 'Samanta Geller',
                'email'=> 'samanta@mail.com',
                'password'=> '123'
            ],
            [
                'uuid' => (string) Str::uuid(),
                'name'=> 'Martin Byrd',
                'email'=> 'marty@mail.com',
                'password'=> '123'
            ],
        ]);
    }
}
