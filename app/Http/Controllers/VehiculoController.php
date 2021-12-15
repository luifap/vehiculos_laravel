<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createv()
    {
        //
        return view('vehiculo.createv');
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


        $campos=[
            'Marca'=>'required|string|max:100',
            'Categoria'=>'required|string|max:100',
            'Proveedor'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];
        $mensaje=[
            'required'=>'El :attribute es un requerido',
            'Foto.required'=>'La foto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

       // $datosVehiculo = request()->all();
       $datosVehiculo = request()->except('_token');

       if($request->hasFile('Foto')){
           $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public');
       }


       Vehiculo::insert($datosVehiculo);

       //return response()->json($datosEmpleado);
       return redirect('vehiculo')->with('mensaje','Vehiculo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $empleado
     * @return \Illuminate\Http\Response
     */
    public function editv($id)
    {
        //
        $empleado=Vehiculo::findOrFail($id);
        return view('vehiculo.editv', compact('vehiculo') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Marca'=>'required|string|max:100',
            'Categoria'=>'required|string|max:100',
            'Proveedor'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=>'El :attribute es un requerido',
        ];

        if($request->hasFile('Foto')){
          $campos=[ 'Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
          $mensaje=['Foto.required'=>'La foto es requerida'];
        }


        $this->validate($request,$campos,$mensaje);

        //
        $datosVehiculo = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $vehiculo=Vehiculo::findOrFail($id);

            Storage::delete('public/'.$vehiculo->Foto);

            $datosVehiculo['Foto']=$request->file('Foto')->store('uploads','public');
        }



        Vehiculo::where('id','=',$id)->update($datosVehiculo);
        $vehiculo=Vehiculo::findOrFail($id);
        //return view('vehiculo.editv', compact('empleado') );
        return redirect('vehiculo')->with('mensaje','Vehiculo Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $vehiculo=Vehiculo::findOrFail($id);

        if(Storage::delete('public/'.$vehiculo->Foto)){

            Vehiculo::destroy($id);

        }


        

        return redirect('vehiculo')->with('mensaje','Vehiculo Borrado');
    }
}
