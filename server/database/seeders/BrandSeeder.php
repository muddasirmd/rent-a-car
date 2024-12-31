<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Brand::create // To Create one record
        Brand::insert([
        [
            'name'=> 'BMW',
            'image'=> ''
        ],
        [
            'name'=> 'Audi',
            'image'=> ''
        ],
        [
            'name'=> 'Kia',
            'image'=> ''
        ],
    ]);
    }
}
