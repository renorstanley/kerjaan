<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan');
            $table->string('bidang');//clothing, minuman
            $table->string('gambar');
            $table->string('risk_rating');
            $table->text('review');//teks yang menjelaskan produk
            $table->string('purchase');//buat nyimpen tulisan awal di teks "purchase of"
            $table->string('negara');
            $table->integer('target');
            $table->integer('funded');
            $table->integer('returns');
            $table->integer('tenor');
            $table->dateTime('deadline');//Daysleft= deadline - now


            $table->timestamps();//buat nge list kapan data dibuat dan diubah
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('campaigns');
    }
}
