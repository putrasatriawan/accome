<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTagIdInTagsTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags_talent', function (Blueprint $table) {
            $table->renameColumn('tag_id', 'tags_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags_talent', function (Blueprint $table) {
            $table->renameColumn('tags_id', 'tag_id');
        });
    }
}