<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livestocks', function (Blueprint $table) {
            $table->bigIncrements('livestocks_id');
            $table->integer('cattlemans_id');
            $table->integer('livestocks_types_id');
            $table->Varchar('name');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('weight');
            $table->integer('description');
            $table->varchar('image');
            $table->varchar('qr_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livestocks');
    }
}
