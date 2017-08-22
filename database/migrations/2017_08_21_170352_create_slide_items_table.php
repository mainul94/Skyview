<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideItemsTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_items', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->text('caption')->nullable();
            $table->unsignedInteger('image_id')->nullable();
            $table->string('color',40)->nullable();
            $table->string('bg_color',40)->nullable();
            $table->unsignedInteger('slide_id');
            $table->text('style')->nullable();
            $this->schemaCreateEndWith($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_items');
    }
}
