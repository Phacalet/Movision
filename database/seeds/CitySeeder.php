<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        //Vider la table 
        City::truncate();

       // vider ses tables pivots, syntaxe tables sans model 
       // DB::table('role_user')->truncate();

        //Pays livrés par defaut avec l'application
        /* Le super admin */
        $Paris= City::create([
            'country_id'=>1,
            'user_id'=>1,
            'name'=>'Paris',
            'status'=>1, 
            'zone_1'=>'App data'          
        ]);

        $Abidjan= City::create([
            'country_id'=>2,
            'user_id'=>1,
            'name'=>'Abidjan',
            'status'=>1, 
            'zone_1'=>'App data'
        ]);

        $Abidjan= City::create([
            'country_id'=>2,
            'user_id'=>1,
            'name'=>'Bouaké',
            'status'=>1, 
            'zone_1'=>'App data'
        ]);


        $Abidjan= City::create([
            'country_id'=>2,
            'user_id'=>1,
            'name'=>'Korogho',
            'status'=>1, 
            'zone_1'=>'App data'
        ]);
    }
}
