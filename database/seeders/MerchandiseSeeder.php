<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('merchandises')->truncate();

        $merchandise = [
            '1' => 'beer_mug_S',
            '2' => 'beer_mug_L',
            '3' => 'beer_mug_L',
            '4' => 'beer_mug_L',
            '5' => 't-shirt_male_M',
            '6' => 't-shirt_male_L',
            '7' => 't-shirt_male_XL',
            '8' => 't-shirt_male_XXL',
            '9' => 't-shirt_female_S',
            '10' => 't-shirt_female_M',

        ];

        foreach ($merchandise as $id => $merchandise_name) {

            $merchandise  = new Merchandise();
            $merchandise ->id = $id;
            $merchandise ->name = $merchandise_name;
            $merchandise ->save();
        }
    }
}
