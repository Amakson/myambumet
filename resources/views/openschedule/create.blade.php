@extends('layouts.app')
@section('content')

<main class="container">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Create Schedules</h2>
        </div>   
        <div class="col-sm-8 col-sm-offset-1">
        {!! Form::open(['method' => 'POST', 'action' => 'OpenscheduleController@store']) !!}
            <div class="form-group">
                {!! Form::label("title", "Title:") !!}
                {!! Form::text("title", null, ['class' => 'form-control']) !!}
            </div>
            
             <div class="form-group">
                {!! Form::label("type", "Type:") !!}
                {!! Form::select('type', [
                                          'Runs' => 'Runs/Calls', 
                                          'Full-Day' => 'Full Day', 
                                          'Full-Time' => 'Full Time'], null, ['placeholder' => 'Pick a type...'], ['class' => 'form-control']) !!}
                      
            </div>

             <div class="form-group">
                {!! Form::label('start_time', 'Start Time:') !!}
                {!! Form::text('start_time', '', array('id' => 'datepicker'), ['class' => 'form-control']) !!}
            </div>

             <div class="form-group">
                {!! Form::label('end_time', 'End Time:') !!}
                {!! Form::text('end_time', '', array('id' => 'datepicker2'), ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit("Create Schedule", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        </div>
    </div>
</main>

@endsection