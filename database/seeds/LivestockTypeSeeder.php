<?php

use Illuminate\Database\Seeder;

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
            'livestock_category_id'=>'1',
            'name' => 'Sapi Limusin',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'2',
            'livestock_category_id'=>'1',
            'name' => 'Sapi Angus',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'3',
            'livestock_category_id'=>'1',
            'name' => 'Sapi Brahman',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'4',
            'livestock_category_id'=>'1',
            'name' => 'Sapi Simental',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'5',
            'livestock_category_id'=>'1',
            'name' => 'Sapi PO (Peternakan Ongole)',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'6',
            'livestock_category_id'=>'2',
            'name' => 'Kambing Kacang',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'7',
            'livestock_category_id'=>'2',
            'name' => 'Kambing Ettawa',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'8',
            'livestock_category_id'=>'2',
            'name' => 'Kambing Jawarandu',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'9',
            'livestock_category_id'=>'2',
            'name' => 'Kambing Gembrong',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'10',
            'livestock_category_id'=>'2',
            'name' => 'Kambing Boer',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'11',
            'livestock_category_id'=>'3',
            'name' => 'Domba Garut',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'12',
            'livestock_category_id'=>'3',
            'name' => 'Domba Texel Wonosobo',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'13',
            'livestock_category_id'=>'3',
            'name' => 'Domba Batur',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'14',
            'livestock_category_id'=>'3',
            'name' => 'Domba Kibas',
        ]);

        DB::table('livestocks_types')->insert([
            'id'=>'15',
            'livestock_category_id'=>'3',
            'name' => 'Domba Gembel',
        ]);
        //
    }
}
