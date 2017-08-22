<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    use Database\ExtendedBlueprint;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('property', 191);
            $table->enum('cast_type', ['integer', 'real', 'float', 'double', 'string', 'boolean', 'object',
                    'array', 'collection',  'date', 'datetime', 'timestamp'])->default('object');
            $table->longText('opts');
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
        Schema::dropIfExists('settings');
    }
}
