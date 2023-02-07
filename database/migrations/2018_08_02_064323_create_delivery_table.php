<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('country');
            $table->string('region');
            $table->string('city');
			$table->integer('active');
			$table->integer('free_delivery');
            $table->string('metaTitle')->nullable();
            $table->string('metaDescription')->nullable();
            $table->string('address_header')->nullable();
            $table->text('address_dl')->nullable();
            $table->text('address_dpd')->nullable();
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
        Schema::dropIfExists('delivery');
    }
}
