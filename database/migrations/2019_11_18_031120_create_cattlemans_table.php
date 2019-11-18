<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCattlemansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattlemans', function (Blueprint $table) {
            $table->bigIncrements('cattlemans_id');
            $table->varchar('email');
            $table->varchar('name');
            $table->varchar('address');
            $table->integer('province_id');
            $table->integer('regencies_id');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->varchar('password');
            $table->varchar('photo_profile');
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
        Schema::dropIfExists('cattlemans');
    }
}
