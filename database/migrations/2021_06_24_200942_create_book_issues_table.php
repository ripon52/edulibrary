<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("book_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("student_id")->nullable();
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->date("submit_date")->nullable();
            $table->integer("status")->default(0)->comment("0=Not returned,1= Returned,2=Returned with Fine");
            $table->longText("note")->comment("Return note / fine note");
            $table->longText("submit_note")->comment("Return note / fine note");
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
        Schema::dropIfExists('book_issues');
    }
}
