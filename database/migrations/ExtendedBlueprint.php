<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 8/22/17
 * Time: 12:06 AM
 */
namespace Database;

use \Illuminate\Database\Schema\Blueprint;

trait ExtendedBlueprint
{
    /**
     * Add title and slug
     * @param Blueprint $table
     */
    public function schemaCreateStartWith(Blueprint $table)
    {
        $table->increments('id');
        $table->string('title');
        $table->string('slug',191)->unique();
    }

    /**
     * add Timestamp, Created by and updated by
     * @param Blueprint $table
     */
    public function schemaCreateEndWith(Blueprint $table)
    {
        $table->unsignedInteger('user_id')->nullable();
        $table->unsignedInteger('updated_by')->nullable();
        $table->timestamps();
        $table->softDeletes();
    }
}