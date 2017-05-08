<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->decimal('price', 10, 0);
            $table->float('sale_percent')->unsigned();
            $table->float('display_size')->unsigned();
            $table->string('display_detail');
            $table->string('feature_image');
            $table->string('image_list');
            $table->integer('quantity')->unsigned()->default(0);
            $table->string('guarantee')->nullable();
            $table->string('color', 50);
            $table->string('memory')->nullable();
            $table->string('os')->nullable();
            $table->string('size');
            $table->string('design');
            $table->string('camera')->nullable();
            $table->integer('weight')->unsigned();
            $table->string('cpu')->nullable();
            $table->integer('ram')->unsigned()->nullable();
            $table->string('sim');
            $table->string('connect');
            $table->string('battery');
            $table->string('technical');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
