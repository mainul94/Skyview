<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->longText('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('feature_caption')->nullable();
            $table->string('color',40)->nullable();
            $table->string('bg_color',40)->nullable();
            $table->unsignedInteger('template_id')->nullable();
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
        Schema::dropIfExists('slides');
    }
}
