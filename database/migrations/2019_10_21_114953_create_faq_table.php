<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAQTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('faq_category_id')->unsigned()->index();
			$table->foreign('faq_category_id')->references('id')->on('faq_categories')->onDelete('cascade');
			$table->text('question');
			$table->text('answer');
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
        Schema::dropIfExists('faq');
    }
}
