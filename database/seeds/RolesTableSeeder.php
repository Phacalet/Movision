<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vider la table
        Role::truncate();
        //Creer les roles
        Role::create(['name'=>'Super Admin']);
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Superviseur']);
        Role::create(['name'=>'Opérateur']);
        Role::create(['name'=>'Invité']);
    }
}
