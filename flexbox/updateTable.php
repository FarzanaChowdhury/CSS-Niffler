<?php
include("../login-registration/config.php");
include('levels.php');

$uid=$_SESSION['uid'];


$sql= "UPDATE Progress SET Level=Level+1 WHERE UserID=$uid AND Topic='Flexbox' AND Level<3";
$result = $conn->query($sql);
if(!$result)
echo "error updating";
else
echo "successfully updated";

$sql= "SELECT Level FROM Progress WHERE UserID = $uid AND Topic='Flexbox'";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{
    
    echo "Max Level : ";
    echo $row['Level'];
    $lvl = $row['Level'];
}

error_reporting(E_ALL ^ E_WARNING); 

header("Location: flex.php?level".$lvl."=Level".$lvl);