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
            $table->id();
            $table->string('cpf');
            $table->string('iom_ref_no');
            $table->string('it')->default('Pending');
            $table->string('tele')->default('Pending');
            $table->string('dc')->default('Pending');
            $table->string('mob')->default('Pending');
            $table->string('it_remark')->default('NA');
            $table->string('tele_remark')->default('NA');
            $table->string('dc_remark')->default('NA');
            $table->string('mob_remark')->default('NA');
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
        Schema::dropIfExists('statuses');
    }
};
