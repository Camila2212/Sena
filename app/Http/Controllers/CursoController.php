<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    //
        public function index(){
            $datos=DB::select('select * from cursos');
            return view('curso')->with('datos',$datos);
    
        }
        public function create(Request $request)
{
    try
            {

                // // Verificar si el idInstructor existe en la base de datos de instructores
                $instructorExists = DB::table('instructores')->where('idInstructor', $request->idInstructor)->exists();

                if (!$instructorExists) {
                    
                    return back()->with('incorrecto', 'El instructor no existe en la base de datos.');
                }

                // Si el instructor existe, inserta el nuevo curso
                $sql = DB::table('cursos')->insert([
                    'nombre' => $request->nombre,
                    'idInstructor' => $request->idInstructor,
                ]);

                // $sql=DB::insert('insert into cursos (idCurso, nombre, idInstructor) values(Null, ?, ?)',[
                //     $request->nombre,
                //     $request->idInstructor
                // ]);
                // return view('cursos', compact('instructores'))->with('datos', $datos);
 
                
  
            }catch (\Throwable $e) 


            {
                $sql=0;
            }
            if ($sql==true) {
                return back()->with('correcto','El curso ha sido registrado con exito');
            } else {
                return back()->with('incorrecto','Error el curso no ha sido registrado');
            }
            
        }
        public function update(Request $request){
            try
            {
                $sql=DB::update('update cursos set nombre=?, idInstructor=? where idCurso=?',[
                  $request->nombre,
                  $request->idinstructor,
                  $request->id
                ]);
                if ($sql==0) {
                    $sql=1;
                }
            }
            catch (\Throwable )
            {
                $sql=0;
            }
            if ($sql==true) {
                return back()->with('correcto','El curso ha sido modificado');
            } else {
                return back()->with('incorrecto','Error el curso no ha sido modificado');
            }
            
        }
        public function delete($id){
            try
            {
                $sql=DB::delete("delete from cursos where idCurso=$id");
                
            }
            catch (\Throwable )
            {
                $sql=0;
            }
            if ($sql==true) {
                return back()->with("correcto","El Curso ha sido eliminado correctamente");
            } else {
                return back()->with("incorrecto","Eror el Curso no ha sido eliminado");
            }
        
            }
    

            



}
