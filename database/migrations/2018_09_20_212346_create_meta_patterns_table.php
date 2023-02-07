<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaPatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_patterns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('metaTitleStartPoint')->nullable();
            $table->string('metaTitleEndPoint')->nullable();
            $table->string('metaDescriptionStartPoint')->nullable();
            $table->string('metaDescriptionEndPoint')->nullable();
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
        Schema::dropIfExists('meta_patterns');
    }
}
