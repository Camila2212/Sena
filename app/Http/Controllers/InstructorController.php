<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    public function index(){
        $datos=DB::select('select * from instructores');
        return view('instructor')->with('datos',$datos);

    }
    public function create(Request $request){
        try
        {
            $sql=DB::insert('insert into instructores (idInstructor, nombre, apellido) values(Null, ?, ?)',[
                $request->nombre,
                $request->apellido
            ]);
        }
        catch (\Throwable )
        {
            $sql=0;
        }
        if ($sql==true) {
            return back()->with('correcto','El instructor ha sido registrado con exito');
        } else {
            return back()->with('incorrecto','Error el instructor no ha sido registrado');
        }
        
    }
    public function update(Request $request){
        try
        {
            $sql=DB::update('update instructores nombre=?, apellido=? where idInstructor',);

        }
        catch (\Throwable )
        {
            
        }
    }
}
