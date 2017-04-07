<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FundedClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funded_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('full_name');
            $table->string('mobile_number');
            $table->string('company');
            $table->string('currency');
            $table->string('funding_amount_req');
            $table->binary('purchases_order');
            $table->string('email');
            $table->string('country');
            $table->string('industry');
            $table->string('year_established');
            $table->string('est_annual_revenue');
            $table->string('assets_to_be_purchased');
            $table->integer('funding_period');
            $table->string('financial_report');
            $table->timestamps();
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
        Schema::drop('funded_clients');
    }
}
