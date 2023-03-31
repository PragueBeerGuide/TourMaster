<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title'     => 'Hidden Beer Gems of Old Prague',
                'start'     => '2023-03-31 18:00:00',
                'end'       => '2023-03-31 21:00:00',
                'price'     => 59,
                'capacity'  => 1,
                'tour_id'   => 1,
            ],[
                'title'     => 'Hidden Beer Gems of Old Prague',
                'start'     => '2023-04-01 18:00:00',
                'end'       => '2023-04-01 21:00:00',
                'price'     => 59,
                'capacity'  => 1,
                'tour_id'   => 1,
            ],[
                'title'     => 'Hidden Beer Gems of Old Prague',
                'start'     => '2023-04-03 18:00:00',
                'end'       => '2023-04-03 21:00:00',
                'price'     => 59,
                'capacity'  => 1,
                'tour_id'   => 1,
            ],[
                'title'     => 'Hidden Beer Gems of Old Prague',
                'start'     => '2023-04-04 18:00:00',
                'end'       => '2023-04-04 21:00:00',
                'price'     => 59,
                'capacity'  => 1,
                'tour_id'   => 1,
            ],[
                'title'     => 'Craft Beer Tasting',
                'start'     => '2023-04-01 14:00:00',
                'end'       => '2023-04-01 16:00:00',
                'price'     => 41,
                'capacity'  => 1,
                'tour_id'   => 3,
            ],[
                'title'     => 'Craft Beer Tasting',
                'start'     => '2023-04-02 14:00:00',
                'end'       => '2023-04-02 16:00:00',
                'price'     => 41,
                'capacity'  => 1,
                'tour_id'   => 3,
            ],[
                'title'     => 'Craft Beer Tasting',
                'start'     => '2023-04-04 14:00:00',
                'end'       => '2023-04-04 16:00:00',
                'price'     => 41,
                'capacity'  => 1,
                'tour_id'   => 3,
            ],[
                'title'     => 'Heavy drinking like Czechs',
                'start'     => '2023-04-01 15:00:00',
                'end'       => '2023-04-01 19:00:00',
                'price'     => 99,
                'capacity'  => 1,
                'tour_id'   => 4,
            ],
            ]);
    }
}
