<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCustomsTable extends Migration
{
    public function up()
    {
        Schema::create('product_customs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('upc');
            $table->string('brand')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
