<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitales', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name', 60);
            $table->String('img');
            $table->String('slug');
            $table->String('description');
            $table->Text('extract');
            $table->String('telefono');
            $table->String('telefono_sec');
            $table->String('email');
            $table->String('address');
            $table->String('address_sec');
            $table->String('horario_atencion');
            $table->String('ciudad');
            $table->Text('face');
            $table->Text('twi');
            $table->Text('insta');
            $table->Text('video');
            $table->Text('web');
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
        Schema::dropIfExists('hospitales');
    }
}
