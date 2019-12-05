<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivestockTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livestocks_types')->insert([
            'id'=>'1',
            'livestocks_categories_id'=>'1',
            'name' => 'Sapi Limusin',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'2',
            'livestocks_categories_id'=>'1',
            'name' => 'Sapi Angus',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'3',
            'livestocks_categories_id'=>'1',
            'name' => 'Sapi Brahman',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'4',
            'livestocks_categories_id'=>'1',
            'name' => 'Sapi Simental',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'5',
            'livestocks_categories_id'=>'1',
            'name' => 'Sapi PO (Peternakan Ongole)',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'6',
            'livestocks_categories_id'=>'2',
            'name' => 'Kambing Kacang',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'7',
            'livestocks_categories_id'=>'2',
            'name' => 'Kambing Ettawa',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'8',
            'livestocks_categories_id'=>'2',
            'name' => 'Kambing Jawarandu',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'9',
            'livestocks_categories_id'=>'2',
            'name' => 'Kambing Gembrong',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'10',
            'livestocks_categories_id'=>'2',
            'name' => 'Kambing Boer',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'11',
            'livestocks_categories_id'=>'3',
            'name' => 'Domba Garut',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'12',
            'livestocks_categories_id'=>'3',
            'name' => 'Domba Texel Wonosobo',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'13',
            'livestocks_categories_id'=>'3',
            'name' => 'Domba Batur',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'14',
            'livestocks_categories_id'=>'3',
            'name' => 'Domba Kibas',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'15',
            'livestocks_categories_id'=>'3',
            'name' => 'Domba Gembel',
        ]);
       
    }

}
