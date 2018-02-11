@extends('layouts.app')

@section('content')
<div class="container">
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Header + Video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
 <!--Main Navigation-->
<header>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top">
    <a class="navbar-brand" href="index.html">Web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fotos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Peliculas</a>
            </li>
        </ul>
         <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">14 <i class="fa fa-envelope"></i>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">8 <i class="fa fa-eye"></i>Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1 <i class="fa fa-bullhorn"></i></a>
            </li>
            
        </ul>
    </div>
</nav>
</header>
    
<div class="py-2"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item active">SIDEBAR 1</li>
                <li class="list-group-item">La imagen en el menú tiene un Dropdown</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
            </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">



                        <img class="img-fluid" src="https://inst.eecs.berkeley.edu/~cs194-26/fa14/upload/files/proj3/cs194-fi/images/warm_sky.jpg" alt="Ver post">
                        <div class="card-body secondbase">
                            <h4 class="card-title">Air Ticket Bookings</h4>
                           
                            <a href="/user_plane_reservation" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 px-2">
            <ul class="list-group">
                <li class="list-group-item active">SIDEBAR 2</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
                <li class="list-group-item">Lorem ipsum.</li>
            </ul>
        </div>
    </div>
</div>
<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-2 lead">Copyright © 2017 - Joel Miguel Valente <p>Visita mi web demo creado con wordpress <br> con mi theme desde cero <a href="http://www.portfolio2017.skn1.com/oficial/" target="_blank"></a></p></div>
</footer>
</body>
</html>
</div>

@endsection
