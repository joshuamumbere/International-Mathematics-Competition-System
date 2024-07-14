<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttemptsTable extends Migration
{
    public function up()
    {
        Schema::create('attempts', function (Blueprint $table) {
            $table->id('attempt_id');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id')->references('participant_id')-> on ('participants');
            $table->unsignedBigInteger('challenge_id');
            $table->foreign('challenge_id')->references('challenge_id')-> on('challenges');
            $table->integer('score');
            $table->integer('time_taken');
            $table->date('attempt_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attempts');
    }
}
