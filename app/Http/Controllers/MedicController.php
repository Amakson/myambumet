<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicController extends Controller
{
        public function index()
    {
        return view('medic.index');
    }
}
