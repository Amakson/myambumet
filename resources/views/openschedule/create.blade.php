@extends('layouts.app')
@section('content')



<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Create Schedules</h2>
        </div>   

        <div class="container-fluid">
                {{-- <h3>Type</h3> --}}
                {!! Form::open(['method' => 'POST', 'action' => 'OpenscheduleController@store']) !!}
                @include('partials.error-message')
                <div class="">
                   {{-- <div class="form-control form-group-multiple-selects col-xs-11 -col-sm-8 col-md-4">--}}

                    {{-- <div>
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div> --}}
                    <div class="form-group">
                      {!! Form::label("title", "Title ") !!}
                      {!! Form::text("title", null, ['class' => 'form-control']) !!}
                    </div>

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
                     <div>
                         <button class="btn btn-primary form-control">Create Schedule</button>
                     </div>
                    
                </div>
                {!! Form::close() !!}   
        </div>  

{{--         <div class="col-sm-12 custyle">
        {!! Form::open(['method' => 'POST', 'action' => 'OpenscheduleController@store']) !!}
            <div class="form-group">
                @include('partials.error-message')
                <div class="container">
                {!! Form::label("title", "Title ") !!}
                {!! Form::text("title", null, ['class' => 'form-control']) !!}
            </div>
            
             <div class="form-group">
                {!! Form::label("type", "Type ") !!}
                {!! Form::select('type', [
                                          'Runs' => 'Runs/Calls', 
                                          'Full-Day' => 'Full Day', 
                                          'Full-Time' => 'Full Time MWF'], null, ['placeholder' => 'Pick a type...'], ['class' => 'form-control']) !!}
                      
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
                {!! Form::submit("Create Schedule", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        </div>
    </div>// --}}
</main>

@endsection