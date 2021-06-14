<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'regi';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
	//echo "Connection is successfull....";
    ?>
    <script>alert('Connection successfull to Database.......');</script>
    <?php
}
else{
	echo "No Connection";
	die("No Connection" . mysqli_connect_error());
}
?>
