<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("department_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("std_id")->unique();
            $table->string("name")->nullable();
            $table->string("dob")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("semester")->nullable();
            $table->longText("address")->nullable();
            $table->string("parent")->nullable();
            $table->string("isEvening")->default(1)->comment('1=Evening,2=Regular Student');
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
        Schema::dropIfExists('students');
    }
}
