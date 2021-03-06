<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObservacionReunionModel;
class ObservacionReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function __construct(ObservacionReunionModel $Observacion)
    {
        $this->Observacion=$Observacion;
    }

    public function index(ObservacionReunionModel $Observacion)
    {
        $observaciones = ObservacionReunionModel::with('Usuario','SubObservaciones')->where('Tipo','=','C')->get();
        return $observaciones;
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
        $input = $request->all();
        return $this->Observacion->create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $observaciones = ObservacionReunionModel::with('Usuario','SubObservaciones')->where('Id_Reunion','=',$id)->where('Tipo','=','C')->get();
        return $observaciones;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
