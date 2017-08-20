<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 8/11/17
 * Time: 11:39 PM
 */

use \Illuminate\Database\Schema\Blueprint;

trait ExtendedBlueprint
{

    /**
     * Add title and slug
     *
     * @param Blueprint $table
     */
    public function schemaCreateStartWith(Blueprint $table)
    {
        $table->increments('id');
        $table->string('title');
        $table->string('slug')->unique();
    }

    /**
     * add Timestamp, Created by and updated by
     *
     * @param Blueprint $table
     */
    public function schemaCreateEndWith(Blueprint $table)
    {
        $table->unsignedInteger('created_by')->nullable();
        $table->unsignedInteger('updated_by')->nullable();
        $table->timestamps();
        $table->softDeletes();
    }
}