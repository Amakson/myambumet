@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Deleted Schedules</h2>
        </div>   
        <div class="col-sm-12">
            
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="col-md-6">Title</th>
                            <th class="col-md-2">Type</th>
                            <th class="col-md-2">Start Time</th>
                            <th class="col-md-2">End Time</th>
                            </tr>
                        </thead> 
                            <tbody>
                         @foreach ($deletedSchedules as $openschedule)

                      
                    
                {{-- <article> --}}
                    <h2>Title {{ $openschedule->title }}</h2>
                    <p>Type {{ $openschedule->type }}</p>
                    <p>Start Time {{ $openschedule->start_time }}</p>
                    <p>End Time {{ $openschedule->end_time }}</p>


                    {!! Form::open(['method' => 'GET', 'action' => ['OpenscheduleController@restore', $openschedule->id]])  !!}
                        <div class="form-group">
                            {!! form::submit("Restore Schedules", ['class' => 'btn btn-primary']) !!}
                        </div>
                     {!! Form::close() !!} 

                     {!! Form::open(['method' => 'DELETE', 'action' => ['OpenscheduleController@destroySchedule', $openschedule->id]])  !!}
                        <div class="form-group">
                            {!! form::submit("Destroy Schedule", ['class' => 'btn btn-danger']) !!}
                        </div>
                     {!! Form::close() !!}   
                {{-- </article> --}}
                        @endforeach
            </tbody>
            </table>  
            </div> 
        </div>
    </div>
</main>

@endsection