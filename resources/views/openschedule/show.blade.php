@extends('layouts.app')
@section('content')

<main class="container">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>{{ $openschedule->title }}</h2>
        </div>   
        <div class="col-sm-12">
                <article>
                    <p>TYPE: {{ $openschedule->type }}</p>
                    <p>START TIME: {{ $openschedule->start_time }}</p>
                    <p>END TIME: {{ $openschedule->end_time }}</p>
                </article>
        </div>
    </div>
</main>

@endsection