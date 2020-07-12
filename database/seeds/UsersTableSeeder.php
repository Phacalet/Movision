<?php

use App\Role;
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vider la table 
        User::truncate();

        // vider ses tables pivots, syntaxe tables sans model 
        DB::table('role_user')->truncate();

        //Creer les roles
        /* Le super admin */
        $superadmin= User::create([
            'civility'=>3,
            'name'=>'Super Admin', 
            'firstname'=>'app',
            'email'=>'admin@full-it.com', 
            'password'=>Hash::make('azerty1234*'),
            'status'=>1, 
        ]);

        /* Le administrateur de l'application  */
        $admin = User::create([
            'civility'=>3,
            'name'=>'Admin', 
            'firstname'=>'app',
            'email'=>'admin@movision.com', 
            'password'=>Hash::make('password'),
            'status'=>1, 
        ]);

        /* Le chef d'une agence  */
        $superviseur = User::create([
            'civility'=>3,
            'name'=>'Superviseur', 
            'firstname'=>'app',
            'email'=>'superviseur@movision.com', 
            'password'=>Hash::make('superviseur'),
            'status'=>1, 
        ]);

        /* utilisateur de l'application dans une agence  */
        $operateur = User::create([
            'civility'=>3,
            'name'=>'Opérateur', 
            'firstname'=>'app',
            'email'=>'operateur@movision.com', 
            'password'=>Hash::make('operateur'),
            'status'=>1, 
        ]);
        
        //Recuperartion des roles créés
        $superadminRole = Role::where('name','Super Admin')->first();
        $adminRole = Role::where('name','Admin')->first();
        $superviseurRole = Role::where('name','Superviseur')->first();
        $operateurRole = Role::where('name','Opérateur')->first();

        //Affectation des roles créés aux variables liées
        $superadmin->roles()->attach($superadminRole);
        $admin->roles()->attach($adminRole);
        $superviseur->roles()->attach($superviseurRole);
        $operateur->roles()->attach($operateurRole);

    }
}
