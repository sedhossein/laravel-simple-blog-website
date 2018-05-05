<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

         $this->call(UsersTableSeeder::class);

//         DB::table('messages')->insert([
//            'comment' => 'seed with DB:: comment',
//             'email' => 'test@gmail.com'
//         ]);
    }
}
