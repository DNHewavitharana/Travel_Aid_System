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

</head>
<body>
<div id="app">
    <hr/>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <li> <a class="navbar-brand" href="#">Travel Aid System</a></li>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#">FLIGHTS</a></li>
                <li><a href="#">HOTELS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                @else
                <li><a href="#"><i class="fas fa-building"></i> Companies</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i>

                        Projects</a></li>
                <li><a href="#"><i class="fas fa-tasks"></i>

                        Tasks</a></li>

                @if(Auth::user()->role_id == 1)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"> <i class="fas fa-user"></i>


                        Admin <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fas fa-building"></i> All Companies</a></li>
                        <li><a href="#"><i class="fas fa-briefcase"></i> All Projects</a></li>
                        <li><a href="#"><i class="fas fa-tasks"></i> All Tasks</a></li>
                        <li><a href="#"><i class="fas fa-user"></i> All Users</a></li>

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



    @yield('content')

</body>

<!-- Scripts -->
<footer>

    <section class="index-link">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>ABOUT US</h3>
                        <P>Building Consensus among your Senior leaders to leverage your digital strengths and work on gaps which are hindering your growth.</P>
                        <li class="fa-li"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="fa-li"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="fa-li"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3>PRODUCT</h3>
                        <ul>
                            <li><a href="#"> Services-1</a></li>
                            <li><a href="#"> Services-1</a></li>
                            <li><a href="#"> Services-1</a></li>
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
                            <li><a href="#"> Services-1</a></li>
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
                <p class="copy-c">Travel Aid System 2018.
                    Semester 5 Project.</p>
            </div>
        </div>
    </section>

</footer>



<script src="{{ asset('js/app.js') }}"></script>


</html>



