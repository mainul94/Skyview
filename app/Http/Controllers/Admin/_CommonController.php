<?php

namespace App\Http\Controllers\Admin;
use App\Model\ObjectDoseNotBelongsToTheModel;
use Illuminate\Http\Request;


trait _CommonController
{
    use _Ctrl_Default_Value;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (method_exists(__CLASS__, 'before_index')) {
            $this->before_index();
        }
        if (!array_key_exists('data', $this->response_data)) {
            $model = new $this->model;
            $this->response_data['data'] = $model->orderBy('id','desc')->paginate($this->paginate_per_page());
        }
        if (method_exists(__CLASS__, 'after_index')) {
            $this->after_index();
        }
        return response()->json($this->response_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $model
     * @return \Illuminate\Http\Response
     * @throws ObjectDoseNotBelongsToTheModel
     */
    public function show($model)
    {
        $this->checkObjectIsCorrect($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $model
     * @return \Illuminate\Http\Response
     */
    public function edit($model)
    {
        $this->checkObjectIsCorrect($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $model)
    {
        $this->checkObjectIsCorrect($model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy($model)
    {
        $this->checkObjectIsCorrect($model);
    }


    /**
     * @param $model
     * @throws ObjectDoseNotBelongsToTheModel
     */
    private function checkObjectIsCorrect($model)
    {
        if (!is_a($model, $this->model)) {
            throw new ObjectDoseNotBelongsToTheModel($this->model);
        }
    }
}
