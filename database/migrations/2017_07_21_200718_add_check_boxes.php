<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCheckBoxes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sell_forms', function (Blueprint $table) {
            $table->boolean('seven_day')->default(false);
            $table->boolean('fourteen_day')->default(false);
            $table->boolean('thirty_day')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sell_forms', function (Blueprint $table) {
            $table->dropColumn('seven_day');
            $table->dropColumn('fourteen_day');
            $table->dropColumn('thirty_day');
        });
    }
}
