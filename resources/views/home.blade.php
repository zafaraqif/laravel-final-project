<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="klassy/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="klassy/assets/css/font-awesome.css">

    <link rel="stylesheet" href="klassy/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="klassy/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="klassy/assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img style="width: 50%;" src="klassy/assets/images/fyp-sprint-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        @else
                                            <li><a href="{{ route('login') }}" class="text-sm text-white dark:text-white">Log in</a></li>
                                    
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h1 style="color: #191c24;">HANDED IN, <br>WITH FYP SPRINT</h1>
                            <div class="main-white-button">
                                <a href="/login">Manage FYP</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="img">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="klassy/assets/images/illustration.png" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    

    <!-- jQuery -->
    <script src="klassy/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="klassy/assets/js/popper.js"></script>
    <script src="klassy/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="klassy/assets/js/owl-carousel.js"></script>
    <script src="klassy/assets/js/accordions.js"></script>
    <script src="klassy/assets/js/datepicker.js"></script>
    <script src="klassy/assets/js/scrollreveal.min.js"></script>
    <script src="klassy/assets/js/waypoints.min.js"></script>
    <script src="klassy/assets/js/jquery.counterup.min.js"></script>
    <script src="klassy/assets/js/imgfix.min.js"></script> 
    <script src="klassy/assets/js/slick.js"></script> 
    <script src="klassy/assets/js/lightbox.js"></script> 
    <script src="klassy/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="klassy/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>