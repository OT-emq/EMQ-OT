<?php

namespace Database\Seeders;

use App\Models\DailyPlane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailyPlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DailyPlane::factory()->count(20)->create();
    }
}
