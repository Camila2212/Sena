<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprendizController extends Controller
{
    public function index(){
        $datos=DB::select('select * from aprendices');
        return view('aprendiz')->with('datos',$datos);
    }
}