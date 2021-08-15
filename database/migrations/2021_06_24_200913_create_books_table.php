<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("tag_id")->nullable();
            $table->unsignedBigInteger("publisher_id")->nullable();
            $table->unsignedBigInteger("writer_id")->nullable();
            $table->unsignedBigInteger("origin_id")->nullable();
            $table->unsignedBigInteger("department_id")->nullable();
            $table->string("bn_title")->nullable();
            $table->string("title")->nullable();
            $table->string("isbn")->nullable();
            $table->longText("description")->nullable();
            $table->integer("status")->default(1)->comment("1=Available,2=Not Available,0=Lost.");
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
        Schema::dropIfExists('books');
    }
}
