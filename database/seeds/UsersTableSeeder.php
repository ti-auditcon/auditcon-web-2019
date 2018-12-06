<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@auditcon.cl',
                'password' => '$2y$10$e6lSFXcTsFUpsydg87G.r.qG8nXpv9Rx2wWocw0gfGvrdYFmVOrIW',
                'remember_token' => NULL,
                'created_at' => '2018-06-08 16:31:11',
                'updated_at' => '2018-06-08 16:31:11',
            ),
        ));
        
        
    }
}