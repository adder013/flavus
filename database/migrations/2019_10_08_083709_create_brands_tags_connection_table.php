<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTagsConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_tags_connection', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('brands_tags')->onDelete('cascade');
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
        Schema::dropIfExists('brands_tags_connection');
    }
}
