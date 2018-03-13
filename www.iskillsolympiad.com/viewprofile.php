<?php
ob_start();
 session_start();
if(empty($_SESSION['student_id'])){ header('Location: loginiso.php');}
include('include/constant.php');
include('header.php');
 //include_once("include/function.php");
    
global $mysqli;
	
?>

<!DOCTYPE html>
<html>
<head>
<?php include('include/common.php'); ?>
<title>World Skills Competition | International Olympiad | Life Skills Test</title>
<link href="new_css/quiz.css" type="text/css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
#profile td {background-color:#ccccb2;padding-left:5px}
#profile tr {height:30px}
table
{
width:100%;
}
th
{
background-color:#C7C78D;
color:white;
}
</style>
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
	<div id="wrapper">
	 
	<!--<div class="Quiz_logo"><a href="index.php"><img src="img/logo.png"></a></div>-->
	  <h2 align="center">ISO Students Profile</h2>
<table class="table" align="center" border="0" bordercolor="#FF0000" cellpadding="5" cellspacing="5" id="profile">
<?php $sql="select * from olympiad1.studentt where student_id=$_SESSION[student_id]";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){?>
<tr><th>Student Name</th><td><?php echo $row['Student_Name']?></td><th>City</th><td><?php echo $row['City']?></td></tr>
<tr><th>Class</th><td><?php echo $row['Classs']?></td><th>Gender</th><td><?php echo $row['Gender']?></td></tr>
<tr><th>Section</th><td><?php echo $row['Section']?></td><th>Parent Name</th><td><?php echo $row['Parent_Name']?></td></tr>
<tr><th>Roll No</th><td><?php echo $row['Roll_No']?></td><th>Phone No</th><td><?php echo $row['Phone_No']?></td></tr>
<tr><th>School Name</th><td><?php echo $row['School_Name']?></td><th>Email</th><td><?php echo $row['Email']?></td></tr>
<?php }?>

</table>
</body>
</html>