<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('track_group_id')->unsigned()->index();
            $table->foreign('track_group_id')->references('id')->on('track_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('track_status_id')->unsigned()->index();
            $table->foreign('track_status_id')->references('id')->on('track_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('crm_id');
            $table->string('delivery_type');
            $table->string('delivery_company')->nullable();
            $table->string('payment_type');
            $table->string('track_code')->nullable();
            $table->float('price', 16, 2)->nullable();
            $table->integer('delivery_time')->nullable();
            $table->boolean('express_delivery')->default(0);
            $table->boolean('departure_terminal')->default(false);
            $table->string('departure')->nullable();
            $table->boolean('arrival_terminal')->default(false);
            $table->string('arrival')->nullable();
            $table->string('delivery_status')->nullable();
            $table->dateTime('production_date')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('receive_date')->nullable();
            $table->integer('position')->default(1);
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
        Schema::dropIfExists('tracks');
    }
}
