<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['property', 'cast_type', 'opts'];

    protected $primaryKey = 'property';


    protected $casts = ["opts"=>"string"];


    protected function getCastType($key) {
        if ($key == 'opts' && !empty($this->cast_type)) {
            return $this->cast_type;
        } else {
            return parent::getCastType($key);
        }
    }


    public function setOptsAttribute($value)
    {
        if (in_array(gettype($value), ['object', 'array'])) {
            $this->attributes['opts'] = json_encode($value);
        } else if (gettype($value !="string")){
            $this->attributes['opts'] = (string) $value;
        }
    }
}
