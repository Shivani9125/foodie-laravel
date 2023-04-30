<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class foodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('food')->insert([
            [
             'image'=> 'istockphoto-1301982416-170667a.jpg',
             'name'=> 'Vegetable Salad',
              'price'=>'450',
            'description'=>'Vegetable salads may be marinated or sauced mixtures of raw or cooked vegetables.',           
         ],
         [
            
                'image'=> 'sandwich.jpg',
                'name'=> 'Vegetable Sandwich',
                'price'=>'200',
                'description'=>'Quick healthy breakfast.',
            ],
            [
                
                    'image'=> 'grilled fish.jpg',
                    'name'=> 'Grilled Fish',
                    'price'=>'320',
                    'description'=>'Enjoy Grilled fish with cooked Vegetables.',
            ],
            [
          
                'image'=> 'vegetable meal.jpg',
                'name'=> 'Green Vegetable',
                'price'=>'260',
                'description'=>'Mix Vegetables Meal.',
            ],
        [ 
           
            'image'=> 'toast_bread.jpg',
            'name'=> 'Toast Bread',
            'price'=>'140',
            'description'=>'Toast Bread with Blueberry.',
            ]
            
        ] 
    );
       
    }

}
