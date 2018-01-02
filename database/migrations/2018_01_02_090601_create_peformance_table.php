<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peformance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mst_peformance_id');
            $table->char('name', 50);
            $table->dateTime('reserv_start_time');
            $table->dateTime('reserv_end_time');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('peformance');
    }
}
