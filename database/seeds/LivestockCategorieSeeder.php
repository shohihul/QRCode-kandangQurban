<?php

use Illuminate\Database\Seeder;

class LivestockCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi',
        ]);
        
        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba',
        ]);
    }
}
