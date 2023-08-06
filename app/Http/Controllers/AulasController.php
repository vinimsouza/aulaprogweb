<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulasController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', ['aulas' => $aulas]);
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

}
