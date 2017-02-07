<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Availablemedic;
use Session;

class AvailablemedicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('availablemedics.index');
        $availablemedics = Availablemedic::latest()->get();
        return view('availablemedics.index', compact('availablemedics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::flash('flash_message', 'You have created a schedule');
        return view('availablemedics.create');
        // return redirect('openschedule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->all();
        Availablemedic::create($input);
        return redirect('availablemedics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $availablemedics =  Availablemedic::findOrFail($id);
        return view('availablemedics.show', compact('availablemedics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $availablemedics =  Availablemedic::findOrFail($id);
        return view('availablemedics.edit', compact('availablemedics'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $availablemedics = Openschedule::findOrFail($id);  
        $availablemedics->update($input);
        return redirect('availablemedics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
