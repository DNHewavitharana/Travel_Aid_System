@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <link href="{{ asset('css/bookWindow.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    
<div class="image-container set-full-height" style="background-image: url('http://demos.creative-tim.com/material-bootstrap-wizard/assets/img/wizard-book.jpg')">

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Wizard container -->
                
        <div class="wizard-container">
                <div class="card wizard-card" data-color="red" id="wizard">
                     

                    <div class="row container-fluid">
                          <form method="post" action="">
                              {{ csrf_field() }}
                              <h2 class="col-md-12 text-center" >Booking Proceeder</h2>
                      <div class="row">
                                            <div class="col-sm-12">
                                                
                                                <h4 class="info-text moving moving-tab" > Account Details </h4> <br/> <br/> <br/>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons"></i>
                                                    </span>
                                        
                                                    <label class="control-label">Your Email</label>
                                                    <input name="name" type="text" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons"></i>
                                                    </span>
                                                    
                                                        <label class="control-label">Your Password</label>
                                                        <input name="name2" type="password" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>

                                            </div>
                                            <div class="col-sm-5 col-lg-5">
                                                
                                                    <label class="control-label">Country</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                <span class="material-input"></span>
                                                
                                                <label class="control-label">Daily Budget</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> &lt; $100 </option>
                                                        <option value="Albania"> $100 - $499 </option>
                                                        <option value="Algeria"> $499 - $999 </option>
                                                        <option value="American Samoa"> $999+ </option>
                                                    </select>
                                                <span class="material-input"></span>
                                            </div>
                                        </div>




                             <div class="row">
                                            <div class="col-sm-12">
                                                
                                                <h4 class="info-text moving moving-tab" > Plane Details </h4> <br/> <br/> <br/>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons"></i>
                                                    </span>
                                        
                                                    <label class="control-label">Plane Id</label>
                                                    <input name="name" type="text" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons"></i>
                                                    </span>
                                                    
                                                        <label class="control-label">Arrival Time</label>
                                                        <input name="name2" type="time" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>

                                            </div>
                                            <div class="col-sm-5 col-lg-5">
                                                
                                                    <label class="control-label">From</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                <span class="material-input"></span>
                                                
                                                <label class="control-label">To</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> &lt; $100 </option>
                                                        <option value="Albania"> $100 - $499 </option>
                                                        <option value="Algeria"> $499 - $999 </option>
                                                        <option value="American Samoa"> $999+ </option>
                                                    </select>
                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                        <br/><br/>
                      <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                      </div>
                    </form>

      </div>


                
            </div> <!-- row -->
        </div> <!--  big container -->

        
    </div>


    
</div>
</body>
@endsection
