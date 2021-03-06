<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table){
          $table->increments('id');
          $table->text('title');
          $table->text('brand');
          $table->text('image');
          $table->text('description');
          $table->integer('price');
          $table->timestamps();
        });
    }


    public function down()
    {

    }
}
