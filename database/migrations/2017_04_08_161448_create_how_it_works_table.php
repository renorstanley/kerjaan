<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowItWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('how_it_works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_tab');//investing
            $table->string('sub_judul');//how to invest
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('judul_list1');//meet and requirements, etc
            $table->string('judul_list2');//meet and requirements, etc
            $table->string('judul_list3');//meet and requirements, etc

            $table->text('list_penjelasan1');//at least one year operation
            $table->text('list_penjelasan2');//Collection and verification of information on SME
            $table->text('list_penjelasan3');//Launch of crowdfunding campaign
            


            $table->timestamps();//buat nge list kapan data dibuat dan diubah
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('how_it_works');
    }
}
