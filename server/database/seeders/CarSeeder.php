<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            [
                'name'=> 'Audi V8',
                'doors'=> 2,
                'seats'=> 2,
                'speed'=> '240 Km/hr',
                'mode'=> 'Auto',
                'rent'=> 30,
                'brand_id' => 1,
                'owner_id'=> 1,
            ],
            [
                'name'=> 'BMW X6M',
                'doors'=> 4,
                'seats'=> 4,
                'speed'=> '250 Km/hr',
                'mode'=> 'Auto',
                'rent'=> 40,
                'brand_id' => 2,
                'owner_id'=> 2
            ],
            [
                'name'=> '2023 Kia Forte',
                'doors'=> 4,
                'seats'=> 4,
                'speed'=> '230 Km/hr',
                'mode'=> 'Manual',
                'rent'=> 35,
                'brand_id' => 3,
                'owner_id'=> 3
            ],
        ]);
    }
}
