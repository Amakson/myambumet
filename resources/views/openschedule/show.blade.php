@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>{{ $openschedule->title }}</h2><a href="{{ action('OpenscheduleController@edit', [$openschedule->id])}}">Edit</a>
        </div>   

    </div>
               <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $openschedule->type }}</td>
                        <td>{{ $openschedule->start_time }}</td>
                        <td>{{ $openschedule->end_time }}</td>
                    </tr>
                </tbody>
            </table>
</main>


@endsection