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

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<title>CSS Niffler</title>
</head>
<body>

<div id="wave page-wrapper">
    <div class="row"> 
     
		<?php include("../header.php");?>

        <div class="games">
          <span class="large-text">
          <div class="plate">
              <p class="script"><span></span></p>
              <p class="shadow text1">CHOOSE</p>
              <p class="shadow text2">A</p>
              <p class="shadow text3">TOPIC</p>
              <p class="script"><span></span></p>
            </div>
          </span>
          <div class=left-button>
          <button class="noselect"><a href="../flexbox/flex.php?level1=Level1"><span>Flexbox</span></a></button>

          </div>
          <div class=right-button>
          <button class="noselect"><a href="../grid/grid-levels.php?level1=Level1"><span>Grid</span></a></button>

          </div>

        </div>

    </div>
</div>
</body>

</html>