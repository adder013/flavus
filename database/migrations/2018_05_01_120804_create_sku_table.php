<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('sku')->nullable();
            $table->string('sku_code')->nullable();
            $table->bigInteger('currency_id')->unsigned()->index()->default(1);
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->float('price', 16, 2)->nullable();
            $table->float('old_price', 16, 2)->nullable();
            $table->bigInteger('retail_discount')->default(0);
            $table->bigInteger('markup')->default(0);
            $table->float('mrp', 16, 2)->nullable(); // Minimum Retail Price
            $table->float('msp', 16, 2)->nullable(); // Minimum Storefront Price
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
        Schema::dropIfExists('sku');
    }
}
