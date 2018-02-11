@extends('layouts.app')

@section('content')
<div class="container">
      <br/>
      <div class="col-md-8 col-lg-8 col-sm-8 pull-left">

        @foreach($searchResult as $searchResults)    
        <div class="col-md-12 col-lg-12 col-sm-12 pull-left">
            <div class="well">
                 <div class="col-lg-12 heading-title-v2 clearfix">
                    <span class="itin_dateinfo col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                    <span style="font-weight: bold">
                        <span>{{$searchResults->takeoff_airport}} to {{$searchResults->landing_airport}}</span>
                      </span>
                      <span style="font-weight: bold" class="light_gray ">(3hr 50min)</span>
                 </span> 
                </div>
                <div class="itin_logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <span class="logoitnry_section hidden-xs  pull-left block">
                                <img src="https://fmffiles.s3.amazonaws.com/ibe/airlogo/smEK.gif" alt="Emirates">
                            </span><br/>

                            <span class="logo_txt hidden-xs pull-left"> <span class="block flght_name">Emirates</span><br/>
                                <span class="block fligh_number">EK- {{$searchResults->plane_id}}</span> <br/>
                                <span class="block fligh_number ">Boeing 777-300</span>
                            </span>

                        </div>
              <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                <hr/>
                <strong class="pull-left primary-font">{{$searchResults->takeoff_time1}} </strong><span><strong class="pull-center primary-font">{{$searchResults->landing_time1}}</strong></span>
                <small class="pull-right"><b>
                   <span></span>Price Rs. 1000</b></small>
                   <p><a class="btn btn-primary pull-right" href="#" role="button">Book Now</a></p>
                 <br/>
            </ul>
            </div>
        </div>
     @endforeach 

  </div> 

    <div class="col-sm-4 col-lg-4 col-md-4 pull-right"> 
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">

        <div class="col-lg-12  col-md-12 col-sm-12 heading-title-v2 clearfix">
            <span class="itin_dateinfo  col-md-10 col-sm-10 col-xs-12">
                <span class="f-bold">
                    Fare Summary
                </span>
            </span> 
        </div>  
        <div class="bg-w col-lg-12  fare-summary ">

    <div class="clearfix ">
        <div class="fare_det_tab">
            <p class="total_base clearfix ">
                <span class="pull-left text-upper col-md-8" style="">Base Fare : </span>
                <span class="pull-right col-md-4"><span class=" visible-xs xs-sm-text-summary">LKR 25,725</span></span>
            </p>


        <table class="fare_det_table hidden-xs append_bottom5" cellpadding="0" cellspacing="0" width="100%">
            <tbody>

                <tr>
                 <td class="col-md-8 pull-left">1 Adult &lrm;(1 X 25,725)&lrm;</td>
                 <td class="col-md-4 pull-right">LKR 25,725</td>
                 </tr>
            </tbody>
        </table>

        </div>


        <div class="fare_det_tab rm-border">
            <p class="total_base clearfix ">
                <span class="pull-left search-sub-text col-md-8 text-upper">TAXES AND FEES :</span>
                <span class="pull-right col-md-4"><span class=" visible-xs xs-sm-text-summary">LKR 11,754</span></span>

            </p>


            <table class="fare_det_table hidden-xs append_bottom5" cellpadding="0" cellspacing="0" width="100%">
                <tbody>

            <tr>
                 <td class="col-md-8 pull-left">1 Adult &lrm;(1 X 11,754)&lrm;</td>
                 <td class="col-md-4 pull-right">LKR 11,754</td>
                 </tr>
                    </tbody>
            </table>

        </div>


        <div class=" grand_total ">

            <table class="fare_det_table append_bottom5" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <td style="font-weight: normal;" class="text-bold-16 pull-left col-md-8">Total Air Fare</td>
                        <td style="font-weight: normal;" class="text-bold-16 pull-right col-md-4">LKR 37,479</td>
                    </tr>

                </tbody>
            </table>
        </div>


        <div class="fare_det_tab  rm-border" style="">

            <table class="fare_det_table  append_bottom5 " style="margin-top: 10px;" cellpadding="0" cellspacing="0" width="100%">
                <tbody>                   
                    <tr>
                        <td style="font-size: 11px;" class="col-md-8 pull-left"> Service Fee <i data-toggle="tooltip" style="color: #565a5c;    font-size: 14px;" data-placement="top" title="" class="fa default-tooltip service-fee-tooltip  fa-question-circle" aria-hidden="true" data-original-title="This helps us run our platform and offer services like 24/7 support on your trip."></i>  </td>
                        <td class="col-md-4 pull-right">LKR 0</td>
                    </tr>
                    
                    <input type="hidden" name="_pay_new_service_fees[0]" value="0">     
                    <input type="hidden" name="_pay_new_service_fees_count" value="1">
                    
                </tbody>
            </table>

        </div>


        <div id="selected-root-elem-structure" style="    font-size: 11px;" class="selected-root-elem-structure" data-grp-id="grp_p-0-0">

        </div>
        <div class="reserved_lvl_3"><div class="fare_det_tab rm-border" style=""> <table class="fare_det_table append_bottom5 " cellpadding="0" cellspacing="0" width="100%"> <tbody></tbody> </table> </div></div>
        <div id="lvl_1"></div>
        <div id="lvl_2"></div>




        <div class=" grand_total ">

            <table class="fare_det_table append_bottom5" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <td class=" font16 pull-left col-md-8">Grand Total</td>
                        <td class=" font16 pull-right col-md-4 __grand_ttl">LKR 36,193</td>
                    </tr>

                    <tr class="partial-amount" style="display:none">
                        <td class="font16 fontbold pull-left col-md-8"> Pay Now</td>
                        <td class="font16 fontbold pull-right  col-md-4 "> <span class="__grand_ttl_selected_amount">LKR 0</span> </td>
                    </tr>

                    <tr class="partial-amount" style="display:none">
                        <td class="font16  pull-left col-md-8">Amount Due</td>
                        <td class="font16    pull-right col-md-4 "> <span class="__due_amount">LKR 36,193</span> </td>
                    </tr>

                </tbody>
            </table>
        </div>

</div>

        <input type="hidden" name="_pay_main_price" value="37479">
        <input type="hidden" name="_pay_base_fare" value="25725">
        <input type="hidden" name="_pay_lvl_1_amount" value="">
        <input type="hidden" name="_pay_lvl_1_operator" value="">
        <input type="hidden" name="_pay_lvl_2_amount" value="">
        <input type="hidden" name="_pay_lvl_2_operator" value="">
        <input type="hidden" name="_pay_coupon_discount" value="1286">
        <input type="hidden" name="_pay_coupon_discount_amount" value="1286">
        <input type="hidden" name="_pay_coupon_discount_operator" value="%">
        <input type="hidden" name="_pay_ipgprice" value="37479">
        <input type="hidden" name="_pay_sfee" value="0">
        <input type="hidden" name="_pay_taxes" value="11754">
        <input type="hidden" name="_pay_final" value="">
        <input type="hidden" name="_pay_user_development_fee" value="0">


        <input type="hidden" name="_pay_amount_paid" value="0">

        <script>

            _fdiscount = $('input[name=_pay_coupon_discount]').val();
            _baseprice = $('input[name=_pay_base_fare]').val();
            _sfee = $('input[name=_pay_sfee]').val();
            _taxes = $('input[name=_pay_taxes]').val();

        </script>




@endsection
