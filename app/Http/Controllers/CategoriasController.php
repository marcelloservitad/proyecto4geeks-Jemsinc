<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriasModel;
class CategoriasController extends Controller
{
   
    public function index(){

    	$categorias = categorias::orderBy('$id' , 'DESC')->paginate();
	return view('admin.categorias-index' , compact('admin'));
    }

public function show($id){

	$categorias = categorias::find($id);
	return view('admin.categorias-show' , compact('admin'));
}
public function edit($id){

	$categorias = categorias::find($id);
	return view('admin.categorias-edit' , compact('admin'));
}
public function create(){


	return view('admin.categorias-create');
}

public function destroy(){


	$categorias = categorias::find($id);
	$categorias = delete();
	return back()->with('info' , 'El elemento ha sido eliminado'); 
}

public function update(){



}

public function store(Request $request){

     	$name = $request->input('nombre');
 		$hero = new CategoriasModel;
        $hero->nombre = $name;
     
        $hero->save();

        	return back()->with('info' , 'El elemento ha sido almacenado'); 
}

}
