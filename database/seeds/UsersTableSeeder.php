<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('users')->insert([
        'name' => 'Arman Gian Argamosa',
        'email' => 'argamosa.gian@gmail.com',
        'password' => bcrypt('secret'),
      ]);

      DB::table('users')->insert([
        'name' => 'Carl Anthony Magumpara',
        'email' => 'carlanthonymagumpara@gmail.com',
        'password' => bcrypt('secret'),
      ]);      
    }
}
