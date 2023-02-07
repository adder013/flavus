<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('source')->nullable();
			$table->string('medium')->nullable();
			$table->string('campaign')->nullable();
			$table->string('email');
			$table->string('term')->nullable();
			$table->string('content')->nullable();
			$table->string('type')->nullable();
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
        Schema::dropIfExists('emails');
    }
}
