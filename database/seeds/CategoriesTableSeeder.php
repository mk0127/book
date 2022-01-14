<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          	'name' => '小説'
     
        ]);
        DB::table('categories')->insert([
            
            'name' => '伝記'
        ]);
    }
}
