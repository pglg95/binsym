<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinaryOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binary_options', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->float('value');

            $table->float('start_rate');

            $table->float('finish_rate')->nullable();

            $table->dateTime('finish_date');

            $table->integer('speculation');

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
        Schema::drop('binary_options');
    }
}
