<?php

namespace Modules\Anomaly\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Anomaly\Entities\KaiRaw;
use Illuminate\Support\Facades\Validator;
use Modules\Anomaly\Transformers\KairawResource;

class KaiRawController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $kairaw = KaiRaw::all();
        return response(['kairaw' => KairawResource::collection($kairaw), 'messega' => 'Retrieved successfully'], 200);
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

        $kairaw = KaiRaw::create($data);

        return response(['kairaw' => new KairawResource($kairaw), 'message' => 'Created successfully'], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Kairaw $kairaw)
    {
        return response(['kairaw' => new KairawResource($kairaw), 'message' => 'Created successfully'], 200);
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
    public function update(Request $request, Kairaw $kairaw)
    {
        $kairaw->update($request->all());
        return response(['kairaw' => new KairawResource($kairaw), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Anomaly $anomaly)
    {
        $kairaw->delete();

        return response(['message' => 'Deleted']);
    }
}
