@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Available Medics</h2>
        </div>   
        <div class="col-sm-12 custyle">
            {{-- <div class="row col-md-12 custyle"> --}}

            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
            @endif

            <div class="table-responsive">

                <table class="table table-hover table-striped custab">
                    <thead>
                        <tr>
                            <th class="col-md-6">Username</th>
                            <th class="col-md-2">Level</th>
                            <th class="col-md-4">Location</th>
                           {{--  <th class="col-md-2">End Time</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($availablemedics as $availablemedic)    
                        <tr>
                            <td><button class="btn btn-primary"><a style="color:#fff; text-decoration:none;" href="{{ action('AvailablemedicController@show', [$availablemedic->id]) }}">View</a></button>  {{ $availablemedic->Username }}</td>
                            <td>{{ $availablemedic->Level }}</td>
                            <td>{{ $availablemedic->Location }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- </div> --}}
                

        </div>
    </div>
</main>

@endsection