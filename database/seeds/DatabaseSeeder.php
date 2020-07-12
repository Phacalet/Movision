<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* Respecter la hierrarchie des tables mères avant filles*/
        /*  $this->call(RolesTableSeeder::class);
            $this->call(UsersTableSeeder::class); */

        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
