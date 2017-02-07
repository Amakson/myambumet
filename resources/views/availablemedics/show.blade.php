@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>{{ $availablemedic->Username }}</h2><a href="{{ action('AvailablemedicController@edit', [$availablemedic->id]) }}">Edit</a>
        </div>   

    </div>
               <table class="table table-hover">
                <thead>
                    <tr>
                        {{-- <th>Username</th> --}}
                        <th>Level</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       {{--  <td>{{ $availablemedic->Username }}</td> --}}
                        <td>{{ $availablemedic->Level }}</td>
                        <td>{{ $availablemedic->Location }}</td>
                    </tr>
                </tbody>
            </table>
</main>


@endsection