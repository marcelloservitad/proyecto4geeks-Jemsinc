<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConsolasModel;
class ConsolasController extends Controller
{

    public function index(){

        $consolas = consolas::orderBy($id);
    return view('admin.consolas-index' , compact('admin'));
    }

public function show($id){

    $consolas= consolas::find($id);
    return view('admin.consolas-show' , compact('admin'));
}
public function edit($id){

    $consolas= consolas::find($id);
    return view('admin.consolas-edit' , compact('admin'));
}
public function create(){


    return view('admin.consolas-create');
}

public function destroy(){


    $consolas = consolas::find($id);
    $consolas = delete();
    return back()->with('info' , 'El elemento ha sido eliminado'); 
}

public function update(){



}

public function store(Request $request){

        $name = $request->input('nombre');
        $hero = new ConsolasModel;
        $hero->nombre = $name;
     
        $hero->save();

            return back()->with('info' , 'El elemento ha sido almacenado'); 
}

}
