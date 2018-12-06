<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('authors')->delete();

        \DB::table('authors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'first_name' => 'Raúl',
                'last_name' => 'Berríos',
                'ocupation' => 'asdad',
                'description' => 'asdfdfsd',
                'img' => NULL,
                'created_at' => '2018-06-08 12:26:16',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));

        \DB::table('authors')->insert(array (
            0 =>
            array (
                'id' => 2,
                'first_name' => 'Elías',
                'last_name' => 'Gutierrez',
                'ocupation' => 'asdad',
                'description' => 'asdfdfsd',
                'img' => NULL,
                'created_at' => '2018-06-08 12:36:16',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
