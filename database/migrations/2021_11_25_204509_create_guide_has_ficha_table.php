<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideHasFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_has_ficha', function (Blueprint $table) {
            $table->id();

            $table->biginteger('guide_id')->unsigned()->nullable();
            $table->foreign('guide_id')->references('id')->on('guide');

            $table->biginteger('ficha_id')->unsigned()->nullable();
            $table->foreign('ficha_id')->references('id')->on('ficha');

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
        Schema::dropIfExists('guide_has_ficha');
    }
}
