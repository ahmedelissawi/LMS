<!DOCTYPE html>

<?php
include_once('./Control/common.php');

$info=safeGet("get");
?>
<html lang= "en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Simple Sidebar - Start Bootstrap Template</title>

        
             <!-- Bootstrap core CSS -->
        <link href="./style/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/logo-nav.css" rel="stylesheet">
        
        
        <!-- Bootstrap core CSS -->
        <link href="./style/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/simple-sidebar.css" rel="stylesheet">

    </head>

    <body>

        <div id="wrapper">
<input type="hidden" name="id" value="<?=  safeGet("id");?>">



            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Start Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Shortcuts</a>
                    </li>
                    <li>
                        <a href="#">Overview</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    
                    
                       <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> 
            <div class="container">
                
                          
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./signup.php">Sign UP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Sign in </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <h1 class="mt-5"> Welcome everyone to our site </h1>
            <p>it's for study and mange your time and ofcourse for ads $$$ </p>
            <p>We hope you find it helpful</p>
        </div>
        <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="./style/Jquery/jquery.min.js"></script>
        <script src="./style/Js/bootstrap.bundle.min.js"></script>
                   
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

       
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>



