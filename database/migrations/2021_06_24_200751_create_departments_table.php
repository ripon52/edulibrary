<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string("bn_name")->nullable();
            $table->string("name")->nullable();
            $table->string("logo")->nullable();
            $table->timestamps();
        });

        $departments = ["CSE","EEE","EET","English","BBA","LLB","Masters"];

        foreach ($departments as $department) {
            \App\Department::query()->create([
                'name' => $department
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
