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
            $table->bigIncrements('id');
            $table->integer('cattleman_id');
            $table->integer('livestock_type_id');
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('weight');
            $table->string('description');
            $table->string('image');
            $table->string('qr_code');
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
