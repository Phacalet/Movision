<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vider la table 
        Country::truncate();

        //Pays livrés par defaut avec l'application
        /* Le super admin */
        $france= Country::create([
            'name'=>'France',
            'status'=>1, 
            'zone_1'=>'App data',
            'user_id'=>1
        ]);

        $ci= Country::create([
            'name'=>'Côte d\'Ivoire',
            'status'=>1, 
            'zone_1'=>'App data',
            'user_id'=>1
        ]);


        
        $ci= Country::create([
            'name'=>'Italie',
            'status'=>1, 
            'zone_1'=>'App data',
            'user_id'=>1
        ]);
    }
}
