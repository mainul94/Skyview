<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected function getCastType($key) {
        if ($key == 'opts' && !empty($this->cast_type)) {
            return $this->cast_type;
        } else {
            return parent::getCastType($key);
        }
    }
}
