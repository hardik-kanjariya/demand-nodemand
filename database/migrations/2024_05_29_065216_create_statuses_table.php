<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->string('cpf');
            $table->string('iom_ref_no');
            $table->string('it')->default('Pending');
            $table->string('it_r');
            $table->string('tele')->default('Pending');
            $table->string('tele_r');
            $table->string('dc')->default('Pending');
            $table->string('dc_r');
            $table->string('sim')->default('Pending');
            $table->string('sim_r');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
};
