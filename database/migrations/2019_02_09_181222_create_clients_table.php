<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clientName');
            $table->string('lawTypeSelect');
            $table->string('lawName')->nullable(true);
            $table->string('generalName')->nullable(true);
            $table->string('factAddr')->nullable(true);
            $table->string('lawAddr')->nullable(true);
            $table->string('INN')->nullable(true);
            $table->string('KPP')->nullable(true);
            $table->string('ORGN')->nullable(true);
            $table->string('checkAcc')->nullable(true);
            $table->string('corrAcc')->nullable(true);
            $table->string('BIK')->nullable(true);
            $table->string('bankName')->nullable(true);
            $table->string('phoneNumber')->nullable(true);
            $table->string('email', 100)->nullable(true);
            $table->boolean('vk')->default(false);
            $table->boolean('inst')->default(false);
            $table->boolean('fb')->default(false);
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
