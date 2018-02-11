@extends('layouts.app')
@section('content')

<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/searchBar.css') }}" rel="stylesheet">

    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

 <div class="flight-engine">
     <div class="tabing">
        <ul>
            <li><a class="active" href="#1"><i class="fa fa-plane" aria-hidden="true"></i> Flight</a>
            </li>
      	</ul>
      		<form method="post" action="{{route('user_plane_reservation.search')}}">
          					{{ csrf_field() }}
                     <div class="tab-content">
                        <div id="1" class="tab1 active">
                           <div class="flight-tab row">
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="takeoff_airport" class="textboxstyle" id="takeoff_airport" placeholder="From City or airport">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="landing_airport" class="textboxstyle" id="landing_airport" placeholder="To City or airport">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="date" min={{$today}} name="departure_date" class="textboxstyle" id="from-date1" placeholder="Depart">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="date" min={{$today}} name="return_date" class="textboxstyle" id="return_date" placeholder="Returrn">
                              </div>

                               <div class="persent-one less-per">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <input type="number" min=1 name="no_passengers" class="textboxstyle" id="to-date" placeholder="Number of Passengers">
                              </div>

                              <div class="persent-one less-btn">
                                 <input type="Submit" name="submit" value="Search" class="btn btn-info cst-btn" id="srch">
                              </div></div></div></div>
            </form>
          
        </div>

     <script src="{{ asset('js/searchBar.js') }}"></script>
    </div>
 <footer class="bg-dark text-white">
     <div class="text-center py-2 lead">Copyright © 2018 - Dilshan Hewavitharana <p>Visita mi web demo creado con wordpress <br> con mi theme desde cero <a href="http://www.portfolio2017.skn1.com/oficial/" target="_blank"></a></p></div>
 </footer>
 @endsection
</body>
</html>

