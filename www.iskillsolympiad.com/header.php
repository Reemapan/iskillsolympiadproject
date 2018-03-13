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
<link href="new_css/quiz.css" type="text/css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
.Quiz_logo {
    display: block;
    width: 100%;
    text-align: center;
    margin: 12px 0px;
    border-bottom: 1px solid #ed1c24;
}
.Quiz_logo img {
    margin: auto;
    text-align: center;
}
header{ height:auto;}
</style>
</head>
<body>
  <div class="Quiz_logo"><a href="index.php"><img src="img/logo.png"></a></div>

	<div id="wrapper">
	 
	
	  <header>
		<!--<div class="Quiz_logo"><a href="index.php"><img src="img/logo.png"></a></div>-->
		 
				<div class="nav">
					<ul>
						<li><a href="studentprofile.php">BACK</a></li>
						<li><a href="viewprofile.php">PROFILE</a></li>
						
						
					<!--	<li><a href="#">ABOUT US</a></li>-->
							<!--	<li><a href="logout.php">LOG OUT</a></li>-->
					
					</ul>
				
				</div>
	
	  </header>
	  
	