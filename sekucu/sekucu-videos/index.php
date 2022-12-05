<?php
// require https
if ($_SERVER['HTTPS'] != "on") {
  $url="https://".
  $_SERVER['SERVER_NAME'].
  $_SERVER['REQUEST_URL'];
  header("location:$url");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>

       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos- vlogs</title>
        <!-- my favicon -->
        <link rel="icon" type="image/ico" href="../images/favicon.ico" /> 
 
     <link rel="stylesheet" type="text/css" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">

</head>
<body>
  <div id="page-container">
    <div id="content-wrap">

  <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="../images/logo.png">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>

                              <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="index.php">Videos</a></div>
                            </li>

                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link"  href="../depart.php">Departments</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 

                                   <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Contact Us</a> 
 <!--     <a class="dropdown-item" role="presentation" href="http://portal.sekucu.ml/">Portal </a> -->
   <a class="dropdown-item" role="presentation"  href="../home.php">Portal </a>                              
                                </div>
                            </li>
                    

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

   
   <section style="text-align: center; margin-top: 2%;"> 
<p>
  <iframe width="400" height="300" src="https://www.youtube.com/embed/UujmHsNc210" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="400" height="300" src="https://www.youtube.com/embed/OucRQLdsp9s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="400" height="300" src="https://www.youtube.com/embed/c-LQsJhEGUc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>

<div>
<iframe width="400" height="300" src="https://www.youtube.com/embed/ee8Al3nB0gc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="400" height="300" src="https://www.youtube.com/embed/LVvdndFE4dI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="400" height="300" src="https://www.youtube.com/embed/-19syPXvZOo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <p>
    <iframe width="400" height="300" src="https://www.youtube.com/embed/e7uDDgUgFCM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="400" height="300" src="https://www.youtube.com/embed/q5DBiRiDlRY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="400" height="300" src="https://www.youtube.com/embed/gglwKjLoxE0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </p>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/VMkIdLg8T8g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

    <div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>
</body>
</html>