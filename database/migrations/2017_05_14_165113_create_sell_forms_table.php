<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('data_id');
            $table->string('name',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('phone',191)->nullable();
            $table->string('address1',191)->nullable();
            $table->string('address2',191)->nullable();
            $table->string('city',191)->nullable();
            $table->string('state',191)->nullable();
            $table->string('zip',191)->nullable();
            $table->text('items')->nullable();
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
        Schema::dropIfExists('sell_forms');
    }
}
