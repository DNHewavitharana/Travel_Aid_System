@extends('layouts.app')
@section('content')

<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/hotelSearch.css') }}" rel="stylesheet">


</head>
<body>
<table>
@foreach($hotels as $hotels)

<div class="col-md-12 col-lg-12 col-sm-12 pull-left">
    <div class="well">
       <tr>
           <td><img src="/images/{{$hotels->img}}" height="30px" width="30px" /></td>
           <td>{{$hotels->name}}</td>
           <td>{{$hotels->address}}</td>
           <td>{{$hotels->country}}</td>
           <td>{{$hotels->city}}</td>
           <td>{{$hotels->room_price}}</td>

       </tr>
    </div>
</div>


    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4">


            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <div class="row display-tr">
                        <h3 class="panel-title display-td">Payment Details</h3>
                        <div class="display-td">
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="" aria-required="true">
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" name="couponCode">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button" disabled="">Start Subscription</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->


        </div>

        <div class="col-xs-12 col-md-8" style="font-size: 12pt; line-height: 2em;">
            <p></p><h1>Features:</h1>
            <ul>
                <li>As-you-type, input formatting</li>
                <li>Form field validation (also as you type)</li>
                <li>Graceful error feedback for declined card, etc</li>
                <li>AJAX form submission w/ visual feedback</li>
                <li>Creates a Stripe credit card token</li>
            </ul>
            <p></p>
            <p>Be sure to replace the dummy API key with a valid Stripe API key.</p>

            <p>Built upon: Bootstrap, jQuery,
                <a href="http://jqueryvalidation.org/">jQuery Validation Plugin</a>,
                <a href="https://github.com/stripe/jquery.payment">jQuery.payment library</a>,
                and <a href="https://stripe.com/docs/stripe.js">Stripe.js</a>
            </p>
        </div>

    </div>


@endforeach
</table>

@endsection
</body>
</html>














































