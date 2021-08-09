<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> -->

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style>
            html, body { -->
                <!-- /* background-color: #fff; */ -->
                <!-- background-image: url({{ asset('images/smkbb3.png') }});
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh;
                margin: 0; */
            } -->

            <!-- .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Facility Booking System
                </div>

                <div class="links"> -->
                    <!-- <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a> -->
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->

<!DOCTYPE html>
<html>
<title>Facility Booking System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.bgimg {background-image: url({{ asset('images/smkbb3.png') }});
.bgimg2 {background-image: url({{ asset('images/smkbb10.jpg') }});
</style>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <!-- <div class="w3-display-middle w3-text-white w3-center"> -->
    <!-- <h1 class="w3-jumbo"><b>Facility Booking System<b></h1> -->

    <div class="w3-display-topmiddle w3-center w3-container w3-black w3-hover-brown w3-hide-small"
   style="opacity:0.7;width:60%">
  <!-- <h2><b>4 Good Reasons<br>For travelling with us</b></h2> -->
  <h1 class="w3-jumbo"><b>Facility Booking System<b></h1>
  <p></p>
    <h2><b>You can now book the facility easily !<b></h2> 
    <!-- <h2><b>17.07.2017</b></h2> -->
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-grey w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="" style="width:30%" class="w3-bar-item w3-button">Home</a>
    <a href="register" style="width:35%" class="w3-bar-item w3-button">Register</a>
    <a href="login" style="width:35%" class="w3-bar-item w3-button">Login</a>
    <!-- <a href="#rsvp" style="width:25%" class="w3-bar-item w3-button w3-hover-black">RSVP</a> -->
  </div>
</div>

<!-- Background image no 2 -->
<div class="w3-container w3-padding-64 w3-pale-red " id="">
  <div class="w3-content">
    <!-- <h1 class="w3-center w3-text-grey"><b>Jane & John</b></h1> -->
    
    <img class="w3-round " src="/images/smkbb8.jpg" style="width:100%;margin:32px 0">
    <h1 class="w3-jumbo">Library</h1><br>
    <p><i>The library has many convenience rooms that can be used by teachers and students. 
      It has Pusat Akses that gives opportunity, especially for students to seek information on a computer. 
      They can use it for free and can be guided by the instructor if they have any problems.
      Teachers and students also can book the whole library but only for education purposes. 
      They can do a meeting or any workshop to use the convenience that has there.
</i>
      
    </p><br>
    <p class="w3-center"><a href="login" class="w3-button w3-black w3-round w3-padding-large w3-large">Book your facility</a></p>
  </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
<img class="w3-round " src="/images/smkbb15.jpg" style="width:100%;margin:32px 0">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Science Laboratory</h1><br>
    <h2></h2>
  </div>
</div>

<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="">
  <div class="w3-content">
    <h1 ><b>COMPUTER LABORATORY</b></h1>
    <img class="w3-round-large " src="/images/smkbb4.jpg" style="width:100%;margin:64px 0">
    <div class="w3-row">
      <!-- <div class="w3-half"> -->
        <h2>Contact here</h2>
        <p>smkbbbooking@gmail.com</p>
        <p>03-31256941</p>
      </div>
      <!-- <div class="w3-half">
        <h2>Where</h2>
        <p>Some place, an address</p>
        <p>Some where, some address</p>
      </div> -->
    </div>
  </div>
</div>

<!-- add booking -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>YOU ABLE TO MAKE IT!</h1>
  <!-- <p class="w3-large">Kindly Respond By January, 2017</p> -->
  <p class="w3-xlarge">
  <p class="w3-center"><b><a href="login" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off w3-large" style="padding:8px 60px">Book now!</a></b></p>
  </p>
</div>



<!-- Footer -->
<!-- <footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div> -->

</body>
</html>
