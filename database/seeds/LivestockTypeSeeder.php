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
        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi Limusin',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi Angus',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi Brahman',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi Simental',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Sapi PO (Peternakan Ongole)',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing Kacang',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing Ettawa',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing Jawarandu',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing Gembrong',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Kambing Boer',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba Garut',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba Texel Wonosobo',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba Batur',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba Kibas',
        ]);

        DB::table('livestocks_categories')->insert([
            'name' => 'Domba Gembel',
        ]);
        //
    }
}
