<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 8/24/17
 * Time: 7:06 PM
 */

namespace App\Model\Admin;



trait Slugable
{

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

}