<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channel_id');
            $table->date('date');
            $table->string('status')->default('OPEN');
            $table->smallInteger('currentAppointments')->default(0);
            $table->smallInteger('maximumCapacity');
            $table->timestamps();

            $table->index('channel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_dates');
    }
}
