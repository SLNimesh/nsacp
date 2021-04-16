<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channelDate_id');
            $table->unsignedBigInteger('user_id');
            $table->smallInteger('queueNo');
            $table->time('time');
            $table->string('patientName');
            $table->smallInteger('patientAge');
            $table->string('comments')->nullable();
            $table->string('conntactNumber')->nullable();
            $table->timestamps();

            $table->index('channelDate_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
