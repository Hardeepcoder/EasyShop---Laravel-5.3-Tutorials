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
          Schema::create('products', function (Blueprint $table) {
       $table->increments('id');
        $table->string('pro_name');
        $table->string('pro_code');
        $table->string('pro_price');
        $table->string('pro_info');
        $table->string('pro_img');
        $table->string('spl_price');
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
          Schema::drop('products');
    }
}
