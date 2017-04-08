<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');//name
            $table->string('gambar');//foto
            $table->string('jabatan');//advisor, chif operating,officer
            $table->string('link_linkedin');
            
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
        Schema::dropIfExists('about');
    }
}
