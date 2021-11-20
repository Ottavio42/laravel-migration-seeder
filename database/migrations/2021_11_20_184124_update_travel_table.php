<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->string("code", 10)->unique();
            $table->string("city", 40);
            $table->unsignedSmallInteger ("days");
            $table->string("transport", 50);
            $table->float ("price", 7, 2);
            $table->text("description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->dropColumn("code");
            $table->dropColumn("city");
            $table->dropColumn("days");
            $table->dropColumn("transport");
            $table->dropColumn("price");
            $table->dropColumn("desciption");
        });
    }
}
