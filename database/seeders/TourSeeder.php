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
                'private' => false
            ],[
    
                'name' => 'PVT Beer Tour',
                'private' => true
            ],[
    
                'name' => 'Public Beer Tasting',
                'private' => false
            ],[
    
                'name' => 'PVT Beer Tasting',
                'private' => true
            ]
            ]);
    }
}
