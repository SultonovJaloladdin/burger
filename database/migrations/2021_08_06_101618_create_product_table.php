<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->boolean('status')->default(true);
            $table->string('summa');
            $table->string('skidka')->nullable();
            $table->string('image')->nullable();
            $table->string('desc')->nullable();
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->cascade();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
