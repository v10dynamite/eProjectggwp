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
            $table->string('categoryid');
            $table->string('productid')->primary();
            $table->string('title');
            $table->string('thumbnail');
            $table->integer('quantity');
            $table->string('price');
            $table->string('description');
            $table->string('description_detail',1000);
            $table->timestamps();
            $table->foreign('categoryid')->references('categoryid')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
