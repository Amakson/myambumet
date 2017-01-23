@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Open Schedules</h2>
        </div>   
        <div class="col-sm-12 custyle">
            {{-- <div class="row col-md-12 custyle"> --}}

            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
            @endif

            @foreach ($openschedules as $openschedule)

            <article>
                <h2><a href="{{ action('OpenscheduleController@show', [$openschedule->id]) }}"></h2>
            </article>
            <div class="table-responsive">

                <table class="table table-hover table-striped custab">
                    <thead>
                        <tr>
                            <th class="col-md-6">Title</th>
                            <th class="col-md-2">Type</th>
                            <th class="col-md-2">Start Time</th>
                            <th class="col-md-2">End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $openschedule->title }}</td>
                            <td>{{ $openschedule->type }}</td>
                            <td>{{ $openschedule->start_time }}</td>
                            <td>{{ $openschedule->end_time }}</td>
                        </tr>
                    </tbody>
                </table>
                {{-- </div> --}}
                @endforeach

        </div>
    </div>
</main>
@endsection