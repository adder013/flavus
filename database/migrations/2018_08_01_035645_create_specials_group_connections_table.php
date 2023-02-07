<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialsGroupConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specials_group_connections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('special_id')->unsigned()->index();
            $table->foreign('special_id')->references('id')->on('specials')->onDelete('cascade');
            $table->integer('group_name_id')->unsigned()->index();
            $table->foreign('group_name_id')->references('id')->on('group_names')->onDelete('cascade');
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
        Schema::dropIfExists('specials_group_connections');
    }
}
