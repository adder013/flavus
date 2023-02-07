<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->integer('depth')->nullable();
            $table->string('name');
            $table->integer('active')->default(0);
            $table->integer('show_content')->default(1);
            $table->integer('show_menu')->default(1);
            $table->string('url');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->integer('filter')->default(0);
            $table->integer('filter_price')->default(0);
            $table->integer('filter_instock')->default(0);
            $table->string('moreinfo')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('sort_position')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
