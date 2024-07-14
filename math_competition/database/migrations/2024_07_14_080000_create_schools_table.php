<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id('school_id'); // Creates an auto-incrementing primary key 'id'
            $table->string('name');
            $table->string('district');
            $table->string('registration_number')->unique();
            $table->string('representative_name');
            $table->string('representative_email')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
