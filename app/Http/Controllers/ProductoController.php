<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= producto::paginate(3)->where('estado','1');
        return view('compra.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // dd($request);
       $request->validate([
       'nombre'=>'required',
       'descripcion'=>'required',
       'categoria'=>'required',
       'precio'=>'required',
       ]);

       producto::create($request->all());
       return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $producto = producto::find($id);
        return view('compra.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $producto = producto::find($id);
        return view('compra.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        //    if ($request->ajax()) {
    
        // $producto = producto::find($id);

        // $producto->nombre = $request->nombre;
        // $producto->descripcion = $request->descripcion;
        // $producto->categoria = $request->categoria;
        // $producto->precio = $request->precio;
        // $producto->estado = $request->estado;
            
        // $producto->save();

        //    return redirect()->route('compras.show');

        //     //     return response()->json([
        //     //     'message'=>'Estado modificado con exito',
        //     //     'id'=>$producto->id,
        //     //     'nombre'=>$producto->nombre,
        //     //     'descripcion'=>$producto->descripcion,
        //     //     'categoria'=>$producto->categoria,
        //     //     'precio'=>$producto->precio,
        //     //     'estado'=>$producto->estado,
        //     // redirect()->route('compras.show');
        //     //     ]);


        // }else{

           $vista = $request->input('vista');
           // return $name; 


        $producto = producto::find($id);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->estado = $request->estado;
            
        $producto->save();
        if ($vista=='show') {
            return redirect()->route('compras.show',compact('producto'));
        }else{

        return redirect()->route('compras.index');
        }
         // } 
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return redirect()->route('compras.index');
    }
}
