<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");			
include("../header.php");
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About</title>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
     
    <link rel="stylesheet" href="aboutCSS/css/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="aboutCSS/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="aboutCSS/css/style/styleAbout.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
 <section id="ABOUT">
     <div class="about-1">
         <h1> ABOUT CSS NIFFLER</h1>
         <P>CSS Niffler is a website which will help the user to learn different concepts of CSS through a fun game in an interactive way. CSS Niffler is a platform where the user can able to know CSS concepts while playing. So it is helpful to play practically and implementing the properties.</P>
     </div>
     <div id="about-2">
     <div class="content-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-book"></i>
                     <h3>MISSION</h3>
                     <hr>
                     <p>Learn while playing</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3>VISION</h3>
                     <hr>
                     <p>CSS learning platform</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-pencil"></i>
                     <h3>ACHIEVEMENTS</h3>
                     <hr>
                     <p>Learn CSS properties</p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
 </section>
    
<!--<footer class="text-center">
    <p>Copyright &copy; 2021 All rights reserved by Freddie Nice Inc.</p>
</footer> -->
</body>
</html>
