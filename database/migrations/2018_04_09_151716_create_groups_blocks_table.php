<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_connect_id')->unsigned()->index()->nullable();
            $table->foreign('product_connect_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('category_connect_id')->unsigned()->index()->nullable();
            $table->foreign('category_connect_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('type')->nullable();
            $table->integer('group_names_id')->unsigned()->index()->nullable();
            $table->foreign('group_names_id')->references('id')->on('group_names')->onDelete('cascade');
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
        Schema::dropIfExists('groups_blocks');
    }
}
