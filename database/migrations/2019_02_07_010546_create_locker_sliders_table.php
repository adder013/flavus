<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLockerSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locker_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('locker_id')->unsigned()->index();
            $table->foreign('locker_id')->references('id')->on('lockers')->onDelete('cascade');
            $table->string('name');
            $table->string('customer')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('sort_position');
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
        Schema::dropIfExists('locker_sliders');
    }
}
