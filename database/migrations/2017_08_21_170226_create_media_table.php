<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->string('file_name');
            $table->string('url');
            $table->string('thumbnail_url')->nullable();
            $table->string('preview_rul')->nullable();
            $table->string('file_type');
            $table->string('file_size');
            $table->string('file_dimension')->nullable();
            $table->text('caption')->nullable();
            $table->string('alt')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('media');
    }
}
