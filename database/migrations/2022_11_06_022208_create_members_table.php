<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_naissance');
            $table->string('fonction');
            $table->string('picture')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('region');
            $table->string('address')->nullable();
            $table->string('section');
            $table->string('civilite')->nullable();
            $table->boolean('payer');
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
        Schema::dropIfExists('members');
    }
}
