<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignBookIssueIdUserIdStudentIdBookIdAtFines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fines', function (Blueprint $table) {
            $table->foreign("book_issue_id")->references('id')->on("book_issues")->onDelete("cascade");
            $table->foreign("book_id")->references('id')->on("books")->onDelete("cascade");
            $table->foreign("student_id")->references('id')->on("students")->onDelete("cascade");
            $table->foreign("user_id")->references('id')->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fines', function (Blueprint $table) {
            $table->dropForeign(["book_issue_id"]);
            $table->dropForeign(["book_id"]);
            $table->dropForeign(["student_id"]);
            $table->dropForeign(["user_id"]);
        });
    }
}
