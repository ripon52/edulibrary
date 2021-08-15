<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignDepartmentIdAndUserIdTagIdPublisherIdWriterIdOriginIdDepartmentIdAtBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->foreign("department_id")->references('id')->on("departments")->onDelete("cascade");
            $table->foreign("user_id")->references('id')->on("users")->onDelete("cascade");
            $table->foreign("publisher_id")->references('id')->on("publishers")->onDelete("cascade");
            $table->foreign("writer_id")->references('id')->on("writers")->onDelete("cascade");
            $table->foreign("origin_id")->references('id')->on("origins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['publisher_id']);
            $table->dropForeign(['writer_id']);
            $table->dropForeign(['origin_id']);
        });
    }
}
