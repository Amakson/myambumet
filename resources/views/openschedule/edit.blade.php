@extends('layouts.app')
@section('content')



<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Edit Schedules</h2>
        </div>   
        <div class="col-sm-12">
        {!! Form::model($openschedule, ['method' => 'PATCH', 'action' => ['OpenscheduleController@update', $openschedule->id]]) !!}
            <div class="form-group">
                {!! Form::label("title", "Title ") !!}
                {!! Form::text("title", null, ['class' => 'form-control']) !!}
            </div>
            
             <div class="form-group">
                @include('partials.error-message')
                {!! Form::label("type", "Type ") !!}
                {!! Form::select('type', [
                                          'Runs' => 'Runs/Calls', 
                                          'Full-Day' => 'Full Day', 
                                          'Full-Time' => 'Full Time'], null, ['placeholder' => 'Pick a type...'], ['class' => 'form-control']) !!}
                      
            </div>

             <div class="form-group">
                {!! Form::label('start_time', 'Start Time ') !!}
                {!! Form::text('start_time', '', array('id' => 'datepicker'), ['class' => 'form-control']) !!}
            </div>

             <div class="form-group">
                {!! Form::label('end_time', 'End Time ') !!}
                {!! Form::text('end_time', '', array('id' => 'datepicker2'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit("Edit Schedule", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['OpenscheduleController@destroy', $openschedule->id]]) !!}
            <div>
                {!! form::submit("Delete Schedule", ['class' => 'btn btn-danger']) !!}
            
            
            </div>
        {!! Form::close() !!}    
        </div>
    </div>
</main>

@endsection