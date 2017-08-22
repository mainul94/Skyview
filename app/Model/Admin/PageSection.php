<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    /**
     * ******** @IMPORTANT ***********
     *
     * @if type id Dynamic
     *  @Priority 1.Model id or slug >> 2.full sql >> 3.generate sql.
     *  @if has model_class and has model_id or model_slug the return this specify model item from the model with existing field in this section
     * @else if full_sql run it with args. and return with this.
     *  @else run sql query on model_class with select_cols, sql_condition, order, limit and return the gated  values with existing field in this section
     * @else if type is Custom
     * return content with other existing field in this section
     */
}
