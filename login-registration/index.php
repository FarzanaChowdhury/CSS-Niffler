<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Mochiy+Pop+P+One&family=Poppins:ital,wght@0,200;0,300;0,400;1,300;1,500&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>CSS Niffler</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("../header.php");?>
        <!--	Header end  -->
		
        <div id="navbar" class="navB">
        
    </div>
    <section class="navB">
        <div class="main-width">
            <header>
                <div class="logo">
                    <h2><a href="#">CSS Niffler</a></h2>
                </div>   
            </header>
            <div class="content">
                <div class="main-text">
                    <h6>Learn CSS with fun</h6>
                    <h3></h3>
                    <h1>CSS Niffler</h1>
                    <p>Learn CSS Properties with fun</p>
                    <a href="games.php">Play Now</a>
                </div>

                <div class="social">
                    <a href="#"><i class="fa-brands fa-windows"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>

                <div class="image">
                    <img src="./images/big_myniffler_7.png">

                </div>
            </div>
        </div>
    </section>
		
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>


</body>

</html>