<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Openschedule;
use Session;
use App\Http\Requests;
// use App\Category;
//use App\Photo;
//use Carbon\Carbon;
//use Image;
use App\User;


class OpenscheduleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin', ['except' => ['index', 'show']]);
    // }
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('admin', ['only' => ['publish', 'destroy', 'bin', 'restore', 'destroyOpenschedule']]);
        $this->middleware('auth', ['only' => ['index']]);
    }

    public function index()
    {
        // get the latest info fron the database
        $openschedules = Openschedule::latest()->get();
        return view('openschedule.index', compact('openschedules'));

    }

    public function create()
    {
        Session::flash('flash_message', 'You have created a schedule');
        return view('openschedule.create');
        // return redirect('openschedule');
    }

     public function store(Request $request)
    {   
        $rules = [
            'title' => ['required', 'min:10', 'max:200', 'unique:openschedules'],
            'type' => ['required'],
            'start_time' => ['required',  'min:10', 'max:10'],
            'end_time' => ['required',  'min:10', 'max:10'],

        ];
        

        $message = [
            'start_time.required' => 'Please use the date-picker to select date format : mm/dd/yyyy',
            'end_time.required' => 'Please use the date-picker to select date format : mm/dd/yyyy',
        ];

        $this->validate($request, $rules, $message);

        $input = $request->all();
        Openschedule::create($input);
        return redirect('openschedule');
    }

     public function show($id)
    {
        $openschedule =  Openschedule::findOrFail($id);
        return view('openschedule.show', compact('openschedule'));
    }

     public function edit($id)
    {
        $openschedule =  Openschedule::findOrFail($id);
        return view('openschedule.edit', compact('openschedule'));
    }   

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => ['required', 'min:10', 'max:200'],
            'type' => ['required'],
            'start_time' => ['required',  'min:10', 'max:10'],
            'end_time' => ['required',  'min:10', 'max:10'],

        ];

        
        $message = [
            'start_time.required' => 'Please use the date-picker to select date format : mm/dd/yyyy',
            'end_time.required' => 'Please use the date-picker to select date format : mm/dd/yyyy',
        ];

        $this->validate($request, $rules, $message);

        $input = $request->all();
        $openschedule = Openschedule::findOrFail($id);  
        $openschedule->update($input);
        return redirect('openschedule');
    } 

    public function destroy(Request $request, $id)
    {
        $openschedule = Openschedule::findOrFail($id);  
        $openschedule->delete($request->all());
        return redirect('/openschedule/bin');
    } 
    
    public function bin()
    {
        $deletedSchedules = Openschedule::onlyTrashed()->get();  
        return view('openschedule.bin', compact('deletedSchedules'));
    } 

    public function restore($id)
    {
        $restoredSchedules = Openschedule::onlyTrashed()->findOrFail($id);
        $restoredSchedules->restore($restoredSchedules);
        return redirect('/openschedule');
    }

    public function destroySchedule($id)
    {
        $destroySchedule = Openschedule::onlyTrashed()->findOrFail($id);
        $destroySchedule->forceDelete($destroySchedule);
        return back();
    }

    public function publish(Request $request, $id)
    {
        $input = $request->all();
        $openschedule = Openschedule::findOrFail($id);
        $openschedule->update($input);
        return redirect ('admin');
    }   
}
