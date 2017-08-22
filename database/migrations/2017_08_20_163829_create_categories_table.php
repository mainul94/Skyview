<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->longText('content')->nullable();
            $table->text('summery')->nullable();
            $table->string('meta_key')->nullable();
            $table->string('meta_description')->nullable();
            $table->unsignedInteger('template');
            $table->unsignedInteger('thumbnail')->nullable();
            $table->unsignedInteger('slide_id')->nullable();
            $table->enum('status', ['Published'=>'Published', 'Unpublished'=>'Unpublished'])->default('Published');
            $table->timestamp('publish_at')->useCurrent();
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
        Schema::dropIfExists('categories');
    }
}
