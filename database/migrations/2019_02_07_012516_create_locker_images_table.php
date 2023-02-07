<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLockerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locker_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('locker_id')->unsigned()->index();
            $table->foreign('locker_id')->references('id')->on('lockers')->onDelete('cascade');
            $table->integer('type');
            $table->string('image_path');
            $table->string('alt_name')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('locker_images');
    }
}
