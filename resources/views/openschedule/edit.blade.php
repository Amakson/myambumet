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
                @include('partials.error-message')
                  <div>
                        <label for="type">Type</label>
                            <select class="form-control" name="type" id="">
                                <option value="" disabled selected>Pick a type...</option>
                                <option value="Runs">Runs/Calls</option>
                                <option value="Full-Day">Full Day</option>
                                <option value="Full-Time MWF">Full Time MMF</option>
                                <option value="Full-Time TTS">Full Time TTS</option>
                                <option value="Full-Time Variable">Full Time Variable</option>
                            </select>
                     </div> 

                     <div>
                        <label for="start_time">Start Time</label>
                        <input type="text" name="start_time" class="form-control" id="datepicker">
                     </div>  

                     <div>
                        <label for="end_time">End Time</label>
                        <input type="text" name="end_time" class="form-control" id="datepicker2">
                     </div>    

            <br>

            <div class="form-group">
                {!! Form::submit("Edit Schedule", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        {{-- Delete Schedule --}}
        {!! Form::open(['method' => 'DELETE', 'action' => ['OpenscheduleController@destroy', $openschedule->id]]) !!}
            <div class="form-group">
                {!! form::submit("Delete Schedule", ['class' => 'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}  

        </div>
    </div>
</main>

@endsection