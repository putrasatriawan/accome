<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('slug');
            $table->text('body');
            $table->integer('rate');
            $table->string('domisili_id');
            $table->integer('kategori_id');
            $table->integer('user_id');
            $table->string('picture');
            $table->string('cv');
            $table->boolean('is_active');
            $table->integer('views');


            $table->softDeletes();
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
        Schema::dropIfExists('talent');
    }
}