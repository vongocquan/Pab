<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirdropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airdrops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_project')->unsigned();
            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade');
            $table->string('link_airdrop');
            $table->date('end_day');
            $table->bigInteger('max_rewards');
            $table->string('steps');
            $table->bigInteger('estimated_value');
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
        Schema::dropIfExists('airdrops');
    }
}
