<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name'=>'Gabriel Rodríguez',
        'email'=>'web@altavision.com.co',
        'password'=>bcrypt('qwerty'),
      ]);
    }
}
