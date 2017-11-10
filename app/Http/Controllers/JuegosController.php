<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JuegosModel;
class JuegosController extends Controller
{
public function index(){

    	$juegos = juegos::orderBy($id);
	return view('admin.juegos-index' , compact('admin'));
    }

public function show($id){

	$juegos = juegos::find($id);
	return view('admin.juegos-show' , compact('admin'));
}
public function edit($id){

	$juegos= juegos::find($id);
	return view('admin.juegos-edit' , compact('admin'));
}
public function create(){


	return view('admin.juegos-create');
}

public function destroy(){


	$juegos = juegos::find($id);
	$juegos = delete();
	return back()->with('info' , 'El elemento ha sido eliminado'); 
}

public function update(){



}

public function store(Request $request){

   $JuegosModel =new JuegosModel;
          
       $JuegosModel->nombre = $request->input('nombre');
       $JuegosModel->descripcion = $request->input('descripcion');
       $JuegosModel->precio = $request->input('precio');

       /* $JuegosModel->consolas_id =  $request->input('consolas_id');
        $JuegosModel->categorias_id = $request->input('categorias_id');*/
        
        $JuegosModel->consolas_id = 1;
        $JuegosModel->categoria_id =2;
        $JuegosModel->save();
      
       return back()->with('info' , 'El elemento ha sido almacenado');
  }
       
};

















