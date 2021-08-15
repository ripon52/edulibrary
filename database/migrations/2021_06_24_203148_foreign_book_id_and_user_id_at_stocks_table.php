<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignBookIdAndUserIdAtStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreign("book_id")->references('id')->on("books")->onDelete("cascade");
            $table->foreign("user_id")->references('id')->on("users")->onDelete("cascade");
            $table->foreign("supplier_id")->references('id')->on("suppliers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['supplier_id']);
        });
    }
}
