<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectedParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('rejected_participants', function (Blueprint $table) {
            $table->id('rejected_id');
            $table->string('username');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('school_id')->on('schools');
            $table->text('reason');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rejected_participants');
    }
}
