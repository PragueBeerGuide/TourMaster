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
                'description'=> 'Discover the best hidden local pubs carefully selected by a beer sommelier and enjoy some of the finest Czech beers in great company.',
                'highlights' => 'drink beer, learnt the local pub culture, meet other beer-loving travellers',
                'meeting_point' => 'Old Town Square, Prague',
                'inclusions' => 'tasting of 6 different beers, knowledgable beer expert gudie, map of the best beer venues in Prague',
                'image_link' => 'https://cdn.pixabay.com/photo/2022/11/15/11/31/beer-7593794__480.jpg',
                'is_private' => false
            ],[
    
                'name' => 'PVT BT',
                'title' => 'Private Beer Tour', 
                'description'=> 'Discover the best hidden local pubs carefully selected by a beer sommelier and enjoy some of the finest Czech beers in great company.',
                'highlights' => 'drink beer, learnt the local pub culture, exclusive tour only for your group',
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
                'image_link' => 'https://images.unsplash.com/photo-1584225064785-c62a8b43d148?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80',
                'is_private' => false
            ],[
    
                'name' => 'Heavy drinking',
                'title' => 'Drink like the Czechs', 
                'description'=> 'Czechs drink the most beer per capita in the world. Do you think you can keep up? On this experience you will commanded to finish the whole keg of beer in a traditional student way. This unique activity is full of beer drinking, singing and discovering a whole new version of yourselves.',
                'highlights' => 'unlimited beer, amazing memories (or not), real cultural experience',
                'meeting_point' => 'Strahov Student Dorms, Prague',
                'inclusions' => 'unlimited beer, cleaning service, memory beer mug',
                'image_link' => 'https://images.unsplash.com/photo-1513309914637-65c20a5962e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80',
                'is_private' => false
            ]
            ]);
    }
}
