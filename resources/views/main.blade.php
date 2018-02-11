@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel Aid System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
</head>

<body>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://www.stgregoryhotelwdc.com/wp-content/uploads/2015/06/St-Gregory-1600x560.jpg" alt="Slide 3" draggable="false" width="100%">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="https://www.stgregoryhotelwdc.com/wp-content/uploads/2015/06/St-Gregory-1600x560.jpg" alt="Slide 3" draggable="false" width="100%">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="https://www.stgregoryhotelwdc.com/wp-content/uploads/2015/06/St-Gregory-1600x560.jpg" alt="Slide 3" draggable="false" width="100%">
            <div class="carousel-caption">
                ...
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>

    </a>
</div>


<footer class="bg-dark text-white">
    <div class="text-center py-2 lead">Copyright © 2018 - Dilshan Hewavitharana <p>Visita mi web demo creado con wordpress <br> con mi theme desde cero <a href="http://www.portfolio2017.skn1.com/oficial/" target="_blank"></a></p></div>
</footer>
    @endsection


</body>

</html>



