<?php
ob_start();
 session_start();

 //include_once("include/function.php");
    
	global $mysqli;
?>
<!DOCTYPE html>
<html>
<head>
<?php include('include/common.php'); ?>
<link href="quiz.css" type="text/css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>
	<div id="wrapper">
	 
	
	  <header>
		<div class="Quiz_logo"><a href="index.php"><img src="img/logo.png"></a></div>
		 
				<div class="nav">
					<ul>
						<li><a href="schoolprofile.php">BACK</a></li>
						<li><a href="viewschoolprofile.php">PROFILE</a></li>
						
						
					<!--	<li><a href="#">ABOUT US</a></li>-->
							<!--	<li><a href="logout.php">LOG OUT</a></li>-->
					
					</ul>
				
				</div>
	
	  </header>
	  
	