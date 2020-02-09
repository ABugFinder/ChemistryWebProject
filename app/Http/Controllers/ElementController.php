<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Element;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Element::all();

        return view('elements.index')->with('elements', $elements);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Element $element)
    {
        return view('elements.show')->with([
            'element' => $element,
        ]);
    }

}
