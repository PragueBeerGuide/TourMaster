<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guides')->insert([
        [
            'first_name' => 'Lenka',
            'last_name' => 'Pšeničná'
        ],[

            'first_name' => 'Lukáš',
            'last_name' => 'Nachmelený'
        ],[

            'first_name' => 'Tomáš',
            'last_name' => 'Pivrnec'
        ],[

            'first_name' => 'Viktor',
            'last_name' => 'Opilý'
        ]
        ]);
    }
}
