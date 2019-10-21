<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pos_qty')->nullable();

            $table->decimal('pos_sales', 15, 2)->nullable();

            $table->integer('item_nbr');

            $table->integer('wm_week');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
