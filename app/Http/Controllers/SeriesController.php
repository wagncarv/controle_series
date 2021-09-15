<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        echo $request->query('param');
        $series = Serie::all();
        return view('series.index', compact('series'));
    }

    public function create(){

        return view('series.create');
    }

    public function store(Request $request){
        $nome = $request->nome;
        Serie::create($request->all());
    }
}
