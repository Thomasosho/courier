<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id')->unique();
            $table->string('start')->nullable();
            $table->string('current')->nullable();
            $table->string('destination')->nullable();
            $table->string('weight')->nullable();
            $table->string('name')->nullable();
            $table->string('delivered_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('delivered_phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('tracks');
    }
}
