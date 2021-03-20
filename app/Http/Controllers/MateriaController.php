<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function index()
    {
        //$materias = Materia::where('state',1)->get();
        $materias = Materia::all();
        return view('materia.index',compact('materias'));
    }
}
