<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name', 60);
            $table->String('last_name', 60);
            $table->String('img');
            $table->String('slug');
            $table->String('description');
            $table->Text('extract');
            $table->String('telefono');
            $table->String('telefono_sec');
            $table->String('email');
            $table->String('address');
            $table->String('address_sec');
            $table->String('consultorio');
            $table->String('ciudad');
            $table->Text('face');
            $table->Text('twi');
            $table->Text('insta');
            $table->Text('video');
            $table->Text('web');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')
                ->references('id')
                ->on('area')
                ->onDelete('cascade');
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
        Schema::dropIfExists('medicos');
    }
}
