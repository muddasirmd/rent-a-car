<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

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
            'slug'=> 'bmw',
            'image'=> 'brand_icons/bmw-logo.png',
            'uuid' => (string) Str::uuid(),
        ],
        [
            'name'=> 'Audi',
            'slug'=> 'audi',
            'image'=> 'brand_icons/audi.webp',
            'uuid' => (string) Str::uuid(),
        ],
        [
            'name'=> 'Kia',
            'slug'=> 'kia',
            'image'=> 'brand_icons/kia-logo.webp',
            'uuid' => (string) Str::uuid(),
        ],
    ]);
    }
}
