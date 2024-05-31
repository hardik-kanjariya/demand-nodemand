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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('cpf');        
            $table->string('iom_ref_no');
            $table->date('iom_ref_date')->default(date("Y-m-d"));
            $table->string('name');
            $table->string('section');
            $table->string('designation');
            $table->string('reason');
            $table->string('transfer_to');
            $table->string('relleving_date');
            $table->string('epabx_o');
            $table->string('epabx_r');
            $table->string('landline_o');
            $table->string('landline_r');
            $table->bigInteger('mob_no');
            $table->string('sim_provide');
            $table->bigInteger('dc_no');
            $table->string('dc_provider');
            $table->string('l_make');
            $table->string('l_model');
            $table->string('l_srno');
            $table->string('remark');
            $table->rememberToken();
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
        Schema::dropIfExists('details');
    }
};
