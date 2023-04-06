<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

$error='';
$msg='';
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];

	$content=$_POST['content'];
	
	$uid=$_SESSION['uid'];
	
	if(!empty($name) && !empty($phone) && !empty($content))
	{
		
		$sql="INSERT INTO feedback (uid,fdescription,status) VALUES ('$uid','$content','0')";
		   $result=mysqli_query($conn, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Feedback Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}								
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
        
        <div class="full-row">
            <div class="container">
                <div class="dashboard-personal-info p-5 bg-white">              
								<div class="back">
								<div class="contain">
									<?php 
										$uid=$_SESSION['uid'];
										$query=mysqli_query($conn,"SELECT * FROM `user` WHERE uid='$uid'");
										while($row=mysqli_fetch_array($query))
										{
									?>								
										<div class="details">
											<div class="mb-1 text-capitalize"><b>Name:</b> <?php echo $row['1'];?></div>
											<div class="mb-1"><b>Email:</b> <?php echo $row['2'];?></div>
											<div class="mb-1"><b>Contact:</b> <?php echo $row['3'];?></div>
											<!-- <div class="mb-1 text-capitalize"><b>Role:</b> <?php echo $row['5'];?></div> -->
										</div>
										<div class="dp">
										</div>
										
										<?php } ?>
								</div>
								<div>
								<!-- <div class="cont">
									<p style="position: relative; left: 220px; top: 7px; font-weight: bold;">Flex Progress</p>
									<div class="skill">
									<div class="progress-bar">
										70%
									</div>
									</div>
								</div>

								<div class="contg">
									<p style="position: relative; left: 220px; top: 7px; font-weight: bold;">Grid Progress</p>
									<div class="skillg">
									<div class="progressg-bar">
										80%
									</div>
									</div>
								</div> -->
								</div>
                                </div>
								</div>
								
                            
                        </div>
                    
                </div>            
            </div>
        </div>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>

</body>
</html>