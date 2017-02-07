@extends('layouts.app')
@section('content')



<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Create Availability</h2>
        </div>   

        <div class="container-fluid">
                {{-- <h3>Type</h3> --}}
                {!! Form::open(['method' => 'POST', 'action' => 'AvailablemedicController@store']) !!}
                @include('partials.error-message')
                <div class="">
                    <div class="form-group">
                      {!! Form::label("Username", "Username ") !!}
                      {!! Form::text("Username", null, ['class' => 'form-control']) !!}
                    </div>

                    <div>
                        <label for="Cert_Level">Level</label>
                            <select class="form-control" name="Cert_Level" id="">
                                <option value="" disabled selected>Pick a level...</option>
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
                     <div>
                         <button class="btn btn-primary form-control">Create Availability</button>
                     </div>
                    
                </div>
                {!! Form::close() !!}   
        </div>  
</main>

@endsection