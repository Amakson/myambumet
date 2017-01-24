<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>myambunet</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{--  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100)" rel="stylesheet" type="text/css"> --}}
</head>
<body id="welcome">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif

        <br>
        <div class="content">
         <div>
            {{-- <div class="table-title"> --}}
            <div class="row col-md-12 custyle">
                <table class="table table-hover table-striped table-bordered custab">
                <h1 style="color: #fff;" ">Connections For Life.</h1>
                    <h4>Week  <span id="setNumber">3 : 7th-15th </span></h4>
                </div>
                <table class="table-fill">
                    <thead>
                        <tr>
                            <th class="text-left col-md-6"><a class="thHeadLink" style="color:#fff;" href="{{url('/openschedule')}}">Open Schedules</a></th>
                            <!--<th class="text-left">FEES</th>-->
                            <th class="text-left col-md-6"><a class="thHeadLink" style="color:#fff;" href="http://ambu-net.com/">Available Medics</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Full Time  <span id="setNumber"> 21 </span></td>
                            <!--<td class="text-left">6.5%</td>-->
                            <td class="text-left">EMT - B  <span id="setNumber"> 10 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Full Day  <span id="setNumber"> 6 </span></td>
                            <!--<td class="text-left">5.3%</td>-->
                            <td class="text-left">EMT - I   <span id="setNumber"> 8 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Runs/Calls <span id="setNumber"> 17 </span></td>
                            <!--<td class="text-left">4.1%</td>-->
                            <td class="text-left">EMT - P  <span id="setNumber"> 15 </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            
            <div class="title m-b-md">
                myambunet
            </div>

            <div class="links">
                <a href="{{url('/openschedule')}}">open schedules</a>
                <a href="http://ambu-net.com/">available medics</a>
                <a href="{{url('/login')}}">Login</a>
                <a href="{{url('/register')}}">Register</a>
            </div>


        </div>
    </div>
</body>
</html>
