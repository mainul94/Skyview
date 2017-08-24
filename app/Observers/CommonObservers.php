<?php

namespace App\Observers;


class CommonObservers
{

    public function creating($model)
    {
        if (auth()->check() && in_array('user_id', $model->getFillable())) {
            $model->user_id = auth()->user()->id;
        }

        if ( empty($model->slug) && in_array('title', $model->getFillable())) {
            $slug = str_slug($model->title);
            $newModel = get_class($model);
            $newModel = new $newModel();
            $length = $newModel->where('slug', 'like', $slug.'%')->count();
            $model->slug = $slug.($length?'_'.$length:'');
        }

    }

    public function updating($model)
    {
        if (auth()->check() && in_array('updated_by', $model->getFillable())) {
            $model->updated_by = auth()->user()->id;
        }
    }
}
