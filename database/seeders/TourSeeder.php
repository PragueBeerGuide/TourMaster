<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            [
                'name' => 'Public Beer Tour',
                'is_private' => false
            ],[
    
                'name' => 'PVT Beer Tour',
                'is_private' => true
            ],[
    
                'name' => 'Public Beer Tasting',
                'is_private' => false
            ],[
    
                'name' => 'PVT Beer Tasting',
                'is_private' => true
            ]
            ]);
    }
}
