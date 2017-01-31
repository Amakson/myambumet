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
    <link href="/css/effects.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{--  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100)" rel="stylesheet" type="text/css"> --}}
</head>
<body id="welcome">


<br>

    <div class="content">
        {{-- Title for Connection --}}
            <div>
                <h1 style="color: #fff;"> Connections For Life.</h1>
                    <h3> Week : 10 <span id="pipeStyle">|</span> Day : 8 - 15 </h3>
            </div>
    </div>

    <br>
        {{-- Login & Registration Link --}}
    <div class="flex-center">
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

    </div>
    <div>
            <div class="container">
                <div row-fluid>
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff;" href="{{url('/openschedule')}}">Open Schedules</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Full Time  <span id="setNumber"> 21 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Full Day  <span id="setNumber"> 6 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">Runs/Calls <span id="setNumber"> 17 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                <div class="col-sm-6 col-xs-6">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left col-md-4"><a class="thHeadLink" style="color:#fff;" href="http://ambu-net.com/">Available Medics</a></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">EMT - Basic  <span id="setNumber"> 10 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Intermediate   <span id="setNumber"> 8 </span></td>
                        </tr>
                        <tr>
                            <td class="text-left">EMT - Paramedic  <span id="setNumber"> 15 </span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        <div class="content">
            {{-- Ambunet --}}
         <div>
            <div class="title m-b-md">
                myambunet
            </div>
         </div>   

            {{-- Table --}}
                
            {{-- Links --}}
            <div class="links">
                <a href="{{url('/openschedule')}}">open schedules</a>
                <a href="http://ambu-net.com/">available medics</a>
                <a href="{{url('/login')}}">Login</a>
                <a href="{{url('/register')}}">Register</a>
            </div>
<br>
        </div>


  <!--/Start Middle main-->      
<main class="middle" id="middle">
    <div class="middle" id="middle">
        <div class="container-fluid">
            <div class="row">
                <div id="loader">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="lading"></div>
                </div>
            </div>
   <!--/.row--> 

{{-- 
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>  --}}
        </div>
        <div id="Textbody">
            <div>   

                <p>I'm</p>
            </div>     
<b>
  <span1>
    A Medic<br /> 
    A Provider<br />
    Connections For Life.<br />
    myambunet<br />
    At your service...
    </span1>
</b>
        </div>
        <!--/.container-->

    </div>

    <!--/End main-->

</main>  
<main class="middle" id="middle2">
    <div class="middle" id="middle2">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="lading"></div>
                </div>
            </div>
   <!--/.row--> 


        <br>
        <br>
        <br> 
        <br>
        <br>
        <br> 
        </div>
        <!--/.container-->

    </div>
    <!--/End main-->

</main>   

{{-- Start Footer --}}
<footer>
    <div class="footer" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> ABOUT US </h3>
                    <ul>
                        <li><a href="http://www.ambu-net.com">Company</a></li>
                        <li> <a href="#"></a>FAQ</li>
                        <li> <a href="#"> Subscription </a> </li>
                        <li> <a href="#"> Billing </a> </li>
                        <li> <a href="#">Referral Program </a> </li>
                        <li> <a href="#">Terms & Condition </a> </li>
                        {{-- <li> <a href="#"> Lorem Ipsum </a> </li> --}}
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> BLOGS </h3>
                    <ul>
                        <li> <a href="#">How to become a better medic</a> </li>
                        <li> <a href="#">Safety</a> </li>
                        <li> <a href="#">Medics Only</a> </li>
                        <li> <a href="#">Providers Only</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Apps </h3>
                    <ul>
                        <li> <a href="#"> iOS App Coming Soon </a> </li>
                        <li> <a href="#"> Android App Coming Soon </a> </li>
                        {{--<li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li> --}}
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Social </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
                <div class="col-lg-1  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Support </h3>
                    <ul>
                        <li> <a href="#"> Technical </a> </li>
                        <li> <a href="#"> Guide </a> </li>
                        <li>
                            <div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li> --}}
                    </ul>
{{--                     <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul> --}}
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="pull-left"> Copyright © Ambu-Net Inc 2017. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-stripe"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
</body>
</html>
