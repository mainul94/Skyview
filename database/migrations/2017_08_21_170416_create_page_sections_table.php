<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSectionsTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->enum('type',['Custom'=>'Custom', 'Dynamic'=>'Dynamic']);
            $table->string('model_class')->nullable();
            $table->string('model_id')->nullable();
            $table->string('model_slug')->nullable();
            $table->string('order_by')->nullable();
            $table->string('select_cols')->default('*')->nullable();
            $table->string('sql_condition')->nullable();
            $table->integer('select_limit')->nullable();
            $table->longText('content')->nullable();
            $table->string('color',40)->nullable();
            $table->string('bg_color',40)->nullable();
            $table->string('margin')->nullable();
            $table->string('padding')->nullable();
            $table->unsignedInteger('template_id');
            $table->unsignedInteger('thumbnail')->nullable();
            $table->unsignedInteger('slide_id')->nullable();
            $table->enum('status', [0,1])->default(1);
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
        Schema::dropIfExists('page_sections');
    }
}
