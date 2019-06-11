<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1560274866327ProductCustomsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('product_customs')) {
            Schema::create('product_customs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('upc');
                $table->string('brand')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('product_customs');
    }
}
