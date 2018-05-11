<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">



</head>
<body>


<div id="app">
    <hr/>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a><h4>Travel Aid System &nbsp;</h4></a></li>
                <li class="active"><a href="/">WELCOME</a></li>
                <li><a href="{{ route('plane_schedules.index') }}">FLIGHT BOOKING</a></li>
                <li><a href="{{ route('hotel_booking.index') }}">HOTEL BOOKING</a></li>
                <li><a href="{{ route('visiting_place.index') }}">VISITING PLACES</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                @else
                <li><a href="{{ route('hotel_booking.allHotel') }}"><i class="fas fa-hotel"></i> All Hotels</a></li>
                <li><a href="{{ route('hotel_booking.create') }}"><i class="fas fa-hotel"></i> Add Hotels</a></li>
                <li><a href="#"><i class="fas fa-building"></i> Contact</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i>About</a></li>
                <li><a href="#"><i class="fas fa-tasks"></i>Edit Account</a></li>


                @if(Auth::user()->role_id == 1)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"> <i class="fas fa-user"></i>


                        Admin <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <!--  <li><a href="#"><i class="fas fa-building"></i> Send Notifications</a></li>
                        <li><a href="#"><i class="fas fa-briefcase"></i> Deactivate Accounts</a></li>
                        <li><a href="#"><i class="fas fa-tasks"></i>Help</a></li>
                        <li><a href="#"><i class="fas fa-user"></i> About</a></li> -->

                    </ul>
                </li>

                @endif

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"> <i class="fas fa-user"></i>


                        {{ Auth::user()->first_name}}
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>

                </li>
                @endguest
            </ul>
        </div>

    </nav>

</div>
<div class="container">

    @include('partials.errors')
    @include('partials.success')

</div>
    @yield('content')
</body>

<div style="margin-top: 10%">
    <div class="row">
        <div class="col-lg-12 text-center" style="margin-bottom: 50px">
            <h2 class="section-heading text-uppercase">Services</h2>
            <hr/>
            <h3 class="section-subheading text-muted">Plan Your Journey In Easy Way.</h3>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-plane fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Air Ticket Booking</h4>
            <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-hotel fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Hotel Booking</h4>
            <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-location-arrow fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Visiting Location</h4>
            <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
        </div>
    </div>
</div>


<div style="margin-top: 5%">
    <div class="row">
        <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email
                and we will get back to you as soon as possible!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-pull-6 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact" data-sr-id="8"
               style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
            <p>+9476699402</p>
        </div>
        <div class="col-lg-pull-6 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-sr-id="9"
               style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
            <p>
                <a href="mailto:your-email@your-domain.com">dilshan.15@cse.mrt.ac.lk</a>
            </p>
        </div>
    </div>
</div>

<!-- Scripts -->
<footer style="margin-top: 10%">
    <section class="index-link">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>ABOUT US</h3>
                        <P>Building Consensus among your Senior leaders to leverage your digital strengths and work on gaps which are hindering your growth.</P>
                        <li class="fa-li"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="fa-li"><a href="#"> <i class="fab fa-facebook"></i></a></li>
                        <li class="fa-li"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>PRODUCT</h3>
                        <ul>
                            <li><a href="#"> Services-1</a></li>
                            <li><a href="#"> Services-1</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>COMPANY</h3>
                        <ul>
                            <li><a href="#"> Home</a></li>
                            <li><a href="#"> Blog</a></li>
                            <li><a href="#"> About</a></li>
                            <li><a href="#"> contact</a></li>
                            <li><a href="#"> Jobs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>LEARM MORE</h3>
                        <ul>
                            <li><a href="#"> Services-1</a></li>
                            <li><a href="#"> Services-1</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-social">
        <div class="container">
            <div class="row index-social-link text-center">
                <p class="copy-c">Travel Aid System 2018. Semester 5 Project.</p>
            </div>
        </div>
    </section>

</footer>



<script src="{{ asset('js/app.js') }}"></script>


</html>



