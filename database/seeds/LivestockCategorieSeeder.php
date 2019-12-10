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
            'id' => '1',
            'name' => 'Sapi',
        ]);
        
        DB::table('livestocks_categories')->insert([
            'id'=>'2',
            'name' => 'Kambing',
        ]);

        DB::table('livestocks_categories')->insert([
            'id'=>'3',
            'name' => 'Domba',
        ]);
    }
}
