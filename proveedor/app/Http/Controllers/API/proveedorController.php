<?php

namespace App\Http\Controllers\API;

use App\Models\proveedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarproveedorRequest;
use App\Http\Requests\EditarproveedorRequest;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor = proveedor::query()->paginate();
        return response($proveedor, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarproveedorRequest $request)
    {
        proveedor::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        return response()->json([
            'res'=>true,
            'data'=>$proveedor
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarproveedorRequest $request,proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor actualizado exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor Eliminado exitosamente'
        ]);
    }
}
