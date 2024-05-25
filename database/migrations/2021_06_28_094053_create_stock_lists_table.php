<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->string('image');
            $table->tinyInteger('status')->default(1);
            $table->integer('martket_cap');
            $table->decimal('nifty_weightage',5,2);
            $table->float('52_weekhigh');
            $table->float('52_weeklow');
            $table->string('sector');
            $table->float('previous_week_high');
            $table->float('previous_week_low');
            $table->float('previous_month_high');
            $table->float('previous_month_low');
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
        Schema::dropIfExists('stock_lists');
    }
}
