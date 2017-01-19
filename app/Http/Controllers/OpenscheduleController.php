<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Openschedule;

class OpenscheduleController extends Controller
{
    public function index()
    {
        // get the latest info fron the database
        $openschedules = Openschedule::latest()->get();
        return view('openschedule.index', compact('openschedules'));

    }

    public function create()
    {
        return view('openschedule.create');
    }

     public function store(Request $request)
    {
        $input = $request->all();
        Openschedule::create($input);
        return back();
    }

     public function show($id)
    {
        $openschedule =  Openschedule::findOrFail($id);
        return view('openschedule.show', compact('openschedule'));
    }
}
