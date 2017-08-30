<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPreferredContactDataFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sell_forms', function (Blueprint $table) {
            $table->boolean('contact_via_email')->nullable();
            $table->boolean('contact_via_phone')->nullable();
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
            $table->dropColumn('contact_via_email');
            $table->dropColumn('contact_via_phone');
        });
    }
}
