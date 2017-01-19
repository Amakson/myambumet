@extends('layouts.app')
@section('content')

<main class="container">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Open Schedules</h2>
        </div>   
        <div class="col-sm-12">
            @foreach ($openschedules as $openschedule)
    
                <article>
                    <h2><a href="{{ action('OpenscheduleController@show', [$openschedule->id]) }}"
                      >TITLE: {{ $openschedule->title }}<a/></h2>
                    <p>TYPE: {{ $openschedule->type }}</p>
                    <p>START TIME: {{ $openschedule->start_time }}</p>
                    <p>END TIME: {{ $openschedule->end_time }}</p>
                </article>
          @endforeach

        </div>
    </div>
</main>

@endsection