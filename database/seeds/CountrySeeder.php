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

       // vider ses tables pivots, syntaxe tables sans model 
       // DB::table('role_user')->truncate();

        //Pays livrés par defaut avec l'application
        /* Le super admin */
        $france= Country::create([
            'country_id'=>1,
            'name'=>'France',
            'status'=>1, 
            'zone_1'=>'App data',
            'user_id'=>1,
        ]);

        $ci= Country::create([
            'country_id'=>1,
            'name'=>'Côte d\'Ivoire',
            'status'=>1, 
            'zone_1'=>'App data',
            'user_id'=>1,
        ]);
    }
}
