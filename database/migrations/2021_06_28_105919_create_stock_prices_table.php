<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stock_lists');
            $table->date('date')->format('d/m/y');
            $table->float('open');
            $table->float('high');
            $table->float('low');
            $table->float('close');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('stock_prices');
    }
}
