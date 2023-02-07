<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLockerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locker_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('locker_id')->unsigned()->index();
            $table->foreign('locker_id')->references('id')->on('lockers')->onDelete('cascade');
            $table->string('order_option');
            $table->integer('sort_position');
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
        Schema::dropIfExists('locker_orders');
    }
}
