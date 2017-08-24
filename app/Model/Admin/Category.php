<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes, Slugable;

    protected $fillable = ['title', 'slug','user_id', 'updated_by',
        'content', 'summery', 'meta_key', 'meta_description', 'template_id', 'thumbnail', 'slide_id', 'status', 'publish_at'];

    protected $guarded = [];
}
