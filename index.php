<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="author" />
    <title>Smeshub</title>
    <link rel="shortcut icon" href="assets/logo.png">

   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet">
   
    <link href="assets/vendor/material-icons/material-icons.css" rel="stylesheet">
    
    <link href="assets/vendor/flags/css/flag-icon.min.css" rel="stylesheet">
    
    <link href="assets/vendor/daterangepicker-master/daterangepicker.css" rel="stylesheet">

    
    <link href="assets/css/style-darkblue-dark.css" rel="stylesheet" id="stylelink">
   
</head>


<body class="h-100 no-sidemenu">

<div class="wrapper">
    <div class="content shadow-sm position-relative">

        <div class="background">
            <img src="assets/smeshub-new.png" alt="">
        </div>

       
        <div class="container main-container" id="main-container">
            <div class="row login-row-height">
                <div class="col-10 col-lg-7 align-self-center text-center mx-auto ">
                    <div class="row mb-5 justify-content-center" id="timer">
                        <div class="col-auto">
                            <span id="days" class="display-3 font-weight-bold"></span><br><small class="h4">Days</small>
                        </div>
                        <div class="col-auto">
                            <span id="hrs" class="display-3 font-weight-bold"></span><br><small class="h4">Hours</small>
                        </div>
                        <div class="col-auto">
                            <span id="min" class="display-3 font-weight-bold"></span><br><small class="h4">Min</small>
                        </div>
                        <div class="col-auto">
                            <span id="sec" class="display-3 font-weight-bold"></span><br><small class="h4">Sec</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/cookie/jquery.cookie.js"></script>

<script src="assets/vendor/daterangepicker-master/moment.min.js"></script>
<script src="assets/vendor/daterangepicker-master/daterangepicker.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/js/style-picker.js"></script>

<script>
    'use strict'
    $(document).ready(function() {
        var countDownDate = new Date("April 30, 2021 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hrs").innerHTML = hours
            document.getElementById("min").innerHTML = minutes
            document.getElementById("sec").innerHTML = seconds

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "EXPIRED";
            }
        }, 1000);
    });

</script>

</body>

</html>
