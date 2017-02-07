@extends('layouts.app')
@section('content')



<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Edit Schedules</h2>
        </div>   
        <div class="col-sm-12">
        {!! Form::model($availablemedic, ['method' => 'PATCH', 'action' => ['AvailablemedicController@update', $availablemedic->id]]) !!}
            <div class="form-group">
                {!! Form::label("Username", "Username ") !!}
                {!! Form::text("Username", null, ['class' => 'form-control']) !!}
            </div>
               {{--  @include('partials.error-message') --}}
                  <div>
                        <label for="Level">Type</label>
                            <select class="form-control" name="Level" id="">
                                <option value="" disabled selected>Pick a Level...</option>
                                <option value="Emt-B">Emt-B</option>
                                <option value="Emt-I">Emt-I</option>
                                <option value="Emt-P">Emt-P</option>
                            </select>
                     </div>
                     <div>
                     	<label for="Location">Location</label>
                        <input type="text" name="Location" class="form-control" id="">
                     </div> 
            <br>

            <div class="form-group">
                {!! Form::submit("Edit Availability", ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        {{-- Delete Schedule --}}
        {!! Form::open(['method' => 'DELETE', 'action' => ['AvailablemedicController@destroy', $openschedule->id]]) !!}
            <div class="form-group">
                {!! form::submit("Delete Availability", ['class' => 'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}  

        </div>
    </div>
</main>

@endsection