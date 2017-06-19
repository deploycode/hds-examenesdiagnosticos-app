<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->insert([
        'menu'=>'OCT',
        'icon'=>'oct.png',
      ]);
      DB::table('menus')->insert([
        'menu'=>'Pentacam',
        'icon'=>'pentacam.png',
      ]);
      DB::table('menus')->insert([
        'menu'=>'Biometría',
        'icon'=>'biometria.png',
      ]);
      DB::table('menus')->insert([
        'menu'=>'Campo Visual',
        'icon'=>'campovisual.png',
      ]);
      DB::table('menus')->insert([
        'menu'=>'Otros Examenes',
        'icon'=>'otrosexamenes.png',
      ]);
    }
}
