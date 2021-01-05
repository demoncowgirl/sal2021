<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colors')->insert([
          'dmc' => '3844',
          'hex' => '#0088A1',
          'name' => 'Dark Bright Turquoise',
      ]);

      DB::table('colors')->insert([
          'dmc' => '946',
          'hex' => '#C14B1E',
          'name' => 'Med Burnt Orange',
      ]);

      DB::table('colors')->insert([
          'dmc' => '742',
          'hex' => '#F3A230',
          'name' => 'Light Tangerine',
      ]);

      DB::table('colors')->insert([
          'dmc' => '355',
          'hex' => '#6D1B16',
          'name' => 'Dark Terra Cotta',
      ]);

      DB::table('colors')->insert([
          'dmc' => '740',
          'hex' => '#DB6400',
          'name' => 'Tangerine',
      ]);

      DB::table('colors')->insert([
          'dmc' => '3766',
          'hex' => '#90BEC1',
          'name' => 'Light Peacock Blue',
      ]);

      DB::table('colors')->insert([
          'dmc' => '725',
          'hex' => '#EEAF42',
          'name' => 'Med Light Topaz',
      ]);

      DB::table('colors')->insert([
          'dmc' => '920',
          'hex' => '#873113',
          'name' => 'Med Copper',
      ]);

    }
}
