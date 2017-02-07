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
                             <tr>
                                <td> <button class="btn btn-primary btn-xs"> <a style="color:#fff; text-decoration:none;" href="{{ action('OpenscheduleController@restore', [$openschedule->id])  }}">Restore Schedule</a> </button>
                                <button class="btn btn-danger btn-xs"><a style="color:#fff; text-decoration:none;" href=" {{ action('OpenscheduleController@destroySchedule', [$openschedule->id]) }}">Destroy Schedule</a></button> {{ $openschedule->title }}</td>
                                <td>{{ $openschedule->type }}</td>
                                <td>{{ $openschedule->start_time }}</td>
                                <td>{{ $openschedule->end_time }}</td>
                            </tr>     
                        @endforeach
            </tbody>
            </table>  
            </div> 
        </div>
    </div>
</main>

@endsection