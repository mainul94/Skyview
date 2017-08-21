<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 8/21/17
 * Time: 12:09 AM
 */

namespace App\Http\Controllers\Admin;


trait _Ctrl_Default_Value
{
    /**
     * @return int|mixed
     */
    public function paginate_per_page()
    {
        return request()->get('per_page')?request()->get('per_page'): 20;
    }

    /**
     * @return int|mixed
     */
    public function paginate_start_from()
    {
        return request()->get('pages')?request()->get('pages'): 0;
    }

    /**
     * @var array
     */
    private $response_data = ['error'=>false];

}