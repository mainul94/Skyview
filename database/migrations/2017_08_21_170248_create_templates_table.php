<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $this->schemaCreateStartWith($table);
            $table->enum('type', ['Custom'=>'Custom', 'Standard'=>'Standard'])->default('Custom');
            $table->string('path')->nullable();
            $table->longText('html')->nullable();
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
        Schema::dropIfExists('templates');
    }
}
