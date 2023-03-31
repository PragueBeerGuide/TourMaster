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
                'name' => 'Public BT',
                'title' => 'Walking Beer Tour', 
                'description'=> 'Discover the best hidden local pubs carefully selected by a beer sommelier and enjoy some of the finest Czech beers in great company. Meet other travellers and enjoy this beer discovery tour in a small group size withour any huge crowds.',
                'highlights' => 'drink beer, learn the local pub culture, meet other beer-loving travellers',
                'meeting_point' => 'Old Town Square, Prague',
                'inclusions' => 'tasting of 6 different beers, knowledgable beer expert gudie, map of the best beer venues in Prague',
                'image_link' => '/img/tours/product_details/walking_beer_tour.webp',
                'is_private' => false
            ],[
    
                'name' => 'PVT BT',
                'title' => 'Private Beer Tour', 
                'description'=> 'Let your private group indulge into the world of real czech pubs. You will be guided by a local beer expert that knows all the secret venues and make sure you will skip all the tourist traps on the way. Starting time on your request.',
                'highlights' => 'drink beer, learn the local pub culture, exclusive tour only for your group',
                'meeting_point' => 'Old Town Square, Prague',
                'inclusions' => 'tasting of 6 different beers, knowledgable beer expert guide, map of the best beer venues in Prague',
                'image_link' => 'https://cdn.pixabay.com/photo/2022/11/15/11/31/beer-7593794__480.jpg',
                'is_private' => true
            ],[
    
                'name' => 'Public Beer Tasting',
                'title' => 'Craft Beer Tasting', 
                'description'=> 'Czech beer scene offers amazing selection of both traditional and modern breweries. During this 2 hour beer tasting you will taste everything from traditional crisp and refreshing Czech Pilsner lagers to modern IPAs and flavoured sour beers.',
                'highlights' => 'learnt about different flavours of beer, try the best Czech craft beer, certificate of participation',
                'meeting_point' => 'Craft Beer Bar, Prague',
                'inclusions' => 'tasting of 11 beers samples, knowledgable beer sommelier, certificate of participation',
                'image_link' => '/img/tours/product_details/beer_judging.jpeg',
                'is_private' => false
            ],[
    
                'name' => 'Heavy drinking',
                'title' => 'Drink like the Czechs', 
                'description'=> 'Czechs drink the most beer per capita in the world. Do you think you can keep up? On this experience you will be commanded to finish the whole keg of beer in a traditional student way. This unique activity is full of beer drinking and singing.',
                'highlights' => 'unlimited beer, amazing memories (or not), real cultural experience',
                'meeting_point' => 'Strahov Student Dorms, Prague',
                'inclusions' => 'unlimited beer, cleaning service, memory beer mug',
                'image_link' => '/img/tours/product_details/cantus.jpeg',
                'is_private' => false
            ]
            ]);
    }
}
