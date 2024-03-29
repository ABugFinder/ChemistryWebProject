<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CuriosidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $miscuriosidades = Auth::user()->misCuriosidades;
        
        return view('curiosidades')->with(
            'miscuriosidades', $miscuriosidades
        );
    }

}
