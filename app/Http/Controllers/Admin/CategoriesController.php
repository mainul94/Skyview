<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = Category::class;
    }

    public function before_index()
    {
        $this->response_data['data'] = ["name"=>"Kamrul"];
    }

    use _CommonController;


}
