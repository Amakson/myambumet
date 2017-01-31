@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Admin Dashboard</h2>
        </div>   
        {{-- Reset1 Start --}}
        <div class="col-sm-8 col-sm-offset-2 admin-buttons">
            <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/openschedule/create') }}">Create Schedule</a></button>
            <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/openschedule/bin') }}">Trashed Schedules</a></button>
            <button class="btn btn-success link"><a style="color:#fff;" href="{{ url('/') }}">Featured Images</a></button>
            <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/') }}">Users</a></button>
            <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/') }}"> Categories</a></button>
        </div>
        <br>

    </div>

        {{-- Reset1 End --}}
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="" style="text-decoration: none;">Recent Schedules</h1>
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
                            @foreach ($openschedule as $openschedule)
                                {{ Form::model($openschedule, ['method' => 'PATCH', 'action' => ['OpenscheduleController@publish', $openschedule->id]]) }}
                                    @include('partials.error-message')
                                <tr>
                                    <td>
                                        {!! Form::text("title", null, ['class' => 'form-control']) !!}
                                        <a class="btn btn-danger btn-xs" href="{{ action('OpenscheduleController@edit', $openschedule->id) }}">Edit/Delete</a>
                                    </td>
                                    <td>{!! Form::text("type", null, ['class' => 'form-control', 'size' => '20x5']) !!}</td>
                                    <td>{!! Form::select("status", ['0' => 'Draft', '1' => 'Publish'], null, ['class' => 'btn btn-primary']) !!} </td>
                                    <td>{{ Form::submit("Submit", ['class' => 'btn btn-success btn-xs']) }}</td>
                                </tr>                               
                                {{ Form::close() }}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    

        <div class="col-sm-8 col-sm-offset-2 admin-buttons">
            <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/openschedule/create') }}">Create Availability</a></button>
            <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/openschedule/bin') }}">Trashed Availability</a></button>
            <button class="btn btn-success link"><a style="color:#fff;" href="{{ url('/') }}">Featured Images</a></button>
            <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/') }}">Users</a></button>
            <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/') }}"> Categories</a></button>
        </div>
</main>
@endsection