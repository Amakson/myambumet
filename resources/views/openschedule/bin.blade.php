@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Deleted Schedules</h2>
        </div>   
        <div class="col-sm-12">
            @foreach ($deletedSchedules as $openschedule)  
                <article>
                    <h2>TITLE: {{ $openschedule->title }}</h2>
                    <p>TYPE: {{ $openschedule->type }}</p>
                    <p>START TIME: {{ $openschedule->start_time }}</p>
                    <p>END TIME: {{ $openschedule->end_time }}</p>
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
                </article>
          @endforeach

        </div>
    </div>
</main>

@endsection