@extends('front.base')

@section('body')
    <body class="trouble" >
@endsection


@section('content')

    <div class="container troubleshoot">
        <h1>Diagnosing Failure To start and Run</h1>
        <div class="step1">
            <div class="step">
                Starter Cranks?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
        </div>
        <div class="step2">
            <div class="step">
                Starter Spins?
                <span>Clicks usually low voltage or poor connections</span>
            </div>

            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step3">
            <div class="step">
                Battery read over 12V?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step4">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Jump start or pop start car and check if battery is charging
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step5">
            <div class="step">
                Cleared terminals?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step6">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Clear battery terminals and connectors, engine ground.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step7">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> With car in park or neutral, use heavy jumper or screwdriver to bypass starter relay solenoid. Test starter.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step8">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Solenoid stuck not powered, missing teeth on flywheel.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step9">
            <div class="step">
                Engine Fires?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step10">
            <div class="step">
                Sparks to plugs?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step11">
            <div class="step">
                Sparks from coil?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step12">
            <div class="step">
                Mecanical distributor?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step13">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> For electronic distribution, see model manual for diagnostic checks.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step14">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Check condenser, points or magnetic pick-up, rotor, or cap damage.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step15">
            <div class="step">
                12V+ at coil primary?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step16">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Ignition system wiring, voltage regulator.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step17">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Test coil for intenal short. Checl seondary output wire resistance
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>

        <div class="step18">
            <div class="step">
                Fuel to filter?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step19">
            <div class="step">
                Fuel injected?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step20">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Try starter spre in carb, throttle open.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step21">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Single point, check throttle body. Electronic multi-point, separate diagnostic.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step22">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Vapor lock, fuel pump, blockage.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step23">
            <div class="step">
                Starts and stalls?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step24">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Ignition timing, fuel problem, cranking too slow - battery, starter.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step25">
            <div class="step">
                Check OBD, blink code?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step26">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Read OBD or OBD II or check blink code access.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step27">
            <div class="step">
                Stalls on key release to run?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step28">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Ignite "run" circuit or column key switch failure. Ring out with meter.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step29">
            <div class="step">
                Stalls in rain
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step30">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Check for cracked coil. distributor. Check visible electrical arcing running in dark.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step31">
            <div class="step">
                Stalls warm?
            </div>
            <div class="no">
                No
            </div>
            <div class="yes">
                Yes
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step32">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Adjust idle, blow out fuel filter, check fuel pump output. Check vacuum leak or sensor failure.
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>
        <div class="step33">
            <div class="step">
                <i class="fa fa-info-circle" aria-hidden="true"></i> On cold stalling, check for stuck chock, EGR. Check for vacuum leak
            </div>
            <div class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</div>
        </div>

    </div>


    <script>
        $('.step1 .no').click(function(){
            $('.step1').hide('slow');
            $('.step2').show('slow');
        })
        $('.step2 .no').click(function(){
            $('.step2').hide('slow');
            $('.step3').show('slow');
        })
        $('.step3 .no').click(function(){
            $('.step3').hide('slow');
            $('.step4').show('slow');
        })
        $('.step3 .yes').click(function(){
            $('.step3').hide('slow');
            $('.step5').show('slow');
        })
        $('.step5 .no').click(function(){
            $('.step5').hide('slow');
            $('.step6').show('slow');
        })
        $('.step5 .yes').click(function(){
            $('.step5').hide('slow');
            $('.step7').show('slow');
        })
        $('.step2 .yes').click(function(){
            $('.step2').hide('slow');
            $('.step8').show('slow');
        })
        $('.step2 .back').click(function(){
            $('.step2').hide('slow');
            $('.step1').show('slow');
        })
        $('.step3 .back').click(function(){
            $('.step3').hide('slow');
            $('.step2').show('slow');
        })
        $('.step4 .back').click(function(){
            $('.step4').hide('slow');
            $('.step3').show('slow');
        })
        $('.step5 .back').click(function(){
            $('.step5').hide('slow');
            $('.step3').show('slow');
        })
        $('.step6 .back').click(function(){
            $('.step6').hide('slow');
            $('.step5').show('slow');
        })
        $('.step7 .back').click(function(){
            $('.step7').hide('slow');
            $('.step5').show('slow');
        })
        $('.step8 .back').click(function(){
            $('.step8').hide('slow');
            $('.step2').show('slow');
        })
        $('.step1 .yes').click(function(){
            $('.step1').hide('slow');
            $('.step9').show('slow');
        })
        $('.step9 .back').click(function(){
            $('.step9').hide('slow');
            $('.step1').show('slow');
        })
        $('.step9 .no').click(function(){
            $('.step9').hide('slow');
            $('.step10').show('slow');
        })
        $('.step10 .back').click(function(){
            $('.step10').hide('slow');
            $('.step9').show('slow');
        })
        $('.step10 .no').click(function(){
            $('.step10').hide('slow');
            $('.step11').show('slow');
        })
        $('.step11 .back').click(function(){
            $('.step11').hide('slow');
            $('.step10').show('slow');
        })
        $('.step11 .yes').click(function(){
            $('.step11').hide('slow');
            $('.step12').show('slow');
        })
        $('.step12 .back').click(function(){
            $('.step12').hide('slow');
            $('.step11').show('slow');
        })
        $('.step12 .no').click(function(){
            $('.step12').hide('slow');
            $('.step13').show('slow');
        })
        $('.step13 .back').click(function(){
            $('.step13').hide('slow');
            $('.step12').show('slow');
        })
        $('.step12 .yes').click(function(){
            $('.step12').hide('slow');
            $('.step14').show('slow');
        })
        $('.step14 .back').click(function(){
            $('.step14').hide('slow');
            $('.step12').show('slow');
        })
        $('.step11 .no').click(function(){
            $('.step11').hide('slow');
            $('.step15').show('slow');
        })
        $('.step15 .back').click(function(){
            $('.step15').hide('slow');
            $('.step11').show('slow');
        })
        $('.step15 .no').click(function(){
            $('.step15').hide('slow');
            $('.step16').show('slow');
        })
        $('.step16 .back').click(function(){
            $('.step16').hide('slow');
            $('.step15').show('slow');
        })
        $('.step15 .yes').click(function(){
            $('.step15').hide('slow');
            $('.step17').show('slow');
        })
        $('.step17 .back').click(function(){
            $('.step17').hide('slow');
            $('.step15').show('slow');
        })
        $('.step10 .yes').click(function(){
            $('.step10').hide('slow');
            $('.step18').show('slow');
        })
        $('.step18 .back').click(function(){
            $('.step18').hide('slow');
            $('.step10').show('slow');
        })
        $('.step18 .yes').click(function(){
            $('.step18').hide('slow');
            $('.step19').show('slow');
        })
        $('.step19 .back').click(function(){
            $('.step19').hide('slow');
            $('.step18').show('slow');
        })
        $('.step19 .no').click(function(){
            $('.step19').hide('slow');
            $('.step20').show('slow');
        })
        $('.step20 .back').click(function(){
            $('.step20').hide('slow');
            $('.step19').show('slow');
        })
        $('.step19 .yes').click(function(){
            $('.step19').hide('slow');
            $('.step21').show('slow');
        })
        $('.step21 .back').click(function(){
            $('.step21').hide('slow');
            $('.step19').show('slow');
        })
        $('.step18 .no').click(function(){
            $('.step18').hide('slow');
            $('.step22').show('slow');
        })
        $('.step22 .back').click(function(){
            $('.step22').hide('slow');
            $('.step18').show('slow');
        })
        $('.step9 .yes').click(function(){
            $('.step9').hide('slow');
            $('.step23').show('slow');
        })
        $('.step23 .back').click(function(){
            $('.step23').hide('slow');
            $('.step9').show('slow');
        })
        $('.step23 .no').click(function(){
            $('.step23').hide('slow');
            $('.step24').show('slow');
        })
        $('.step24 .back').click(function(){
            $('.step24').hide('slow');
            $('.step23').show('slow');
        })
        $('.step23 .yes').click(function(){
            $('.step23').hide('slow');
            $('.step25').show('slow');
        })
        $('.step25 .back').click(function(){
            $('.step25').hide('slow');
            $('.step23').show('slow');
        })
        $('.step25 .no').click(function(){
            $('.step25').hide('slow');
            $('.step26').show('slow');
        })
        $('.step26 .back').click(function(){
            $('.step26').hide('slow');
            $('.step25').show('slow');
        })
        $('.step25 .yes').click(function(){
            $('.step25').hide('slow');
            $('.step27').show('slow');
        })
        $('.step27 .back').click(function(){
            $('.step27').hide('slow');
            $('.step25').show('slow');
        })
        $('.step27 .yes').click(function(){
            $('.step27').hide('slow');
            $('.step28').show('slow');
        })
        $('.step28 .back').click(function(){
            $('.step28').hide('slow');
            $('.step27').show('slow');
        })
        $('.step27 .no').click(function(){
            $('.step27').hide('slow');
            $('.step29').show('slow');
        })
        $('.step29 .back').click(function(){
            $('.step29').hide('slow');
            $('.step27').show('slow');
        })
        $('.step29 .yes').click(function(){
            $('.step29').hide('slow');
            $('.step30').show('slow');
        })
        $('.step30 .back').click(function(){
            $('.step30').hide('slow');
            $('.step29').show('slow');
        })
        $('.step29 .no').click(function(){
            $('.step29').hide('slow');
            $('.step31').show('slow');
        })
        $('.step31 .back').click(function(){
            $('.step31').hide('slow');
            $('.step29').show('slow');
        })
        $('.step31 .yes').click(function(){
            $('.step31').hide('slow');
            $('.step32').show('slow');
        })
        $('.step32 .back').click(function(){
            $('.step32').hide('slow');
            $('.step31').show('slow');
        })
        $('.step31 .no').click(function(){
            $('.step31').hide('slow');
            $('.step33').show('slow');
        })
        $('.step33 .back').click(function(){
            $('.step33').hide('slow');
            $('.step31').show('slow');
        })
    </script>

@endsection


@section('footer')
        <div class="container">
            <div class="abs"><a href="#">Book Online</a></div>
            <a class="cta" href="tel:08 8369 1899">Call Now</a>
            <h1></h1>
            <p align="justify"></p>
            <div class="social">
                <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-rss" aria-hidden="true"></i></a>
            </div>
            <div class="copyright">© 2019 Just Jap auto care center. All rights reserved. </div>
        </div>
@endsection