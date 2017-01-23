@extends('layouts.app')
@section('content')

<main class="container">
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Admin Dashboard</h2>
        </div>   
        <div class="col-sm-12">
            <button class="btn btn-primary link"><a style="color:#fff;" href="{{ url('/openschedule/create') }}">Create Schedule</a></button>
            <button class="btn btn-danger link"><a style="color:#fff;" href="{{ url('/openschedule/bin') }}">Trashed Schedule</a></button>
            <!--<button class="btn btn-primary"><a href="{{ url('/openschedule/create') }}">Create Schedule</a></button>-->
        </div>
    </div>
</main>

@endsection