<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableChap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chap', function (Blueprint $table) {
            $table->unsignedBigInteger("book_id");
            $table->foreign("book_id")->references("book_id")->on("book");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chap', function (Blueprint $table) {
            $table->dropForeign(["book_id"]);
        });
    }
}
