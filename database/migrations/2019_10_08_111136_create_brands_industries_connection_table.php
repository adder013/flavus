<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsIndustriesConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_industries_connection', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('industry_id')->unsigned();
			$table->foreign('industry_id')->references('id')->on('brands_industries')->onDelete('cascade');
			$table->integer('brand_id')->unsigned();
			$table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('brands_industries_connection');
    }
}
