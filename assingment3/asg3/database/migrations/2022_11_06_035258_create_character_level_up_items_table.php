<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterLevelUpItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_level_up_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->longText('description');
            $table->string('materialType');
            $table->smallInteger('rarity');
            $table->string('obtainedFrom');
            $table->string('imgUrl');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_level_up_items');
    }
}
