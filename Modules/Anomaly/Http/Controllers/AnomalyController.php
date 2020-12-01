<?php

namespace Modules\Anomaly\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Anomaly\Entities\Anomaly;
use Illuminate\Support\Facades\Validator;
use Modules\Anomaly\Transformers\AnomalyResource;

class AnomalyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $anomaly = Anomaly::all();
        return response(['anomaly' => AnomalyResource::collection($anomaly), 'messega' => 'Retrieved successfully'], 200);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  * @return Renderable
    //  */
    // public function create()
    // {
    //     return view('anomaly::create');
    // }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // $validator = Validator::make($data, []);
        
        // if ($validator->fails()) {
        //     return response(['error' => $validator->errors(), 'Validation Error']);
        // }

        $anomaly = Anomaly::create($data);

        return response(['anomaly' => new AnomalyResource($anomaly), 'message' => 'Created successfully'], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Anomaly $anomaly)
    {
        return response(['anomaly' => new AnomalyResource($anomaly), 'message' => 'Retrieved successfully'], 200);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  * @param int $id
    //  * @return Renderable
    //  */
    // public function edit($id)
    // {
    //     return view('anomaly::edit');
    // }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Anomaly $anomaly)
    {
        $anomaly->update($request->all());

        return response(['anomaly' => new AnomalyResource($anomaly), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Anomaly $anomaly)
    {
        $anomaly->delete();

        return response(['message' => 'Deleted']);
    }
}