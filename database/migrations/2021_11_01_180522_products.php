<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',
            function (Blueprint $table) {
                $table->id();
                $table->boolean('is_outstanding')->default(false);
                $table->boolean('is_available')->default(true);
                $table->double('price');
                $table->string('name');
                $table->string('description');


                //Foreign Keys
                $table->unsignedBigInteger('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');

    }
}
