<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivestocksHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livestocks_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('title');
            $table->varchar('description');
            $table->varchar('image')->nullable();
            $table->integer('livestocks_id');
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
        Schema::dropIfExists('livestocks_histories');
    }
}
