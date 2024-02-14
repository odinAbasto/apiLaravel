<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = CarModel::all();
        return  response()->json($models);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new CarModel();
        $model->name = $request->name;
        $model->brand = $request->brand;
        $model->year = $request->year;
        $model->save();
        return response()->json($model);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $model = new CarModel();
        
        return response()->json($model->find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = new CarModel();
        $carModel = $model->find($id);
        $carModel->name = $request->name;
        $carModel->brand = $request->brand;
        $carModel->year = $request->year;
        $carModel->update();
        return response()->json($carModel);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = new CarModel();
        $model->find($id)->delete();
        return response()->json($model);
    }
}
