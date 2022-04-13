<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// EDU Final Project
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('facebook_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('oAuth')->default(0)->comment("0=Normally registered,1=Facebook,2=LinkedinId");
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->integer('isAdmin')->default(0)->comment("1=Admin,0=Student,2=Lecturer/Alumni");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $users = ["admin@eastdelta.edu.bd","mynuddin@eastdelta.edu.bd","mir@eastdelta.edu.bd","rayhan@eastdelta.edu.bd"];
        $names = ["Admin","Maynuddin Hasan","Mir imtiaz","Rayhan Hossain"];

        foreach ($users as $key => $user){
            \App\User::query()->create([
                "name"=>$names[$key],
                "email"=>$user,
                "password"=>bcrypt(123456)
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
        Schema::dropIfExists('users');
    }
}
