<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title_fr');
            $table->string('title_en');
            $table->string('image')->nullable();
            $table->text('description_fr');
            $table->text('description_en');
            $table->string('mission_name_fr')->nullable();
            $table->string('mission_name_en')->nullable();
            $table->string('mission_date')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('stories');
    }
}
