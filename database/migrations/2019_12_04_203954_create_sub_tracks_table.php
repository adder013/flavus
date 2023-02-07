<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('track_id')->unsigned()->index();
            $table->foreign('track_id')->references('id')->on('tracks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('track_code')->nullable();
            $table->string('delivery_status')->nullable();
            $table->dateTime('production_date');
            $table->dateTime('start_date');
            $table->dateTime('receive_date');
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
        Schema::dropIfExists('sub_tracks');
    }
}
