<?php
session_start();
if(empty($_SESSION['student_id'])){ header('Location: loginiso.php');}
include('include/constant.php'); 
/*echo $_SESSION["student_id"];
echo $_SESSION['Classs'];
echo $_SESSION['Email'];*/
//echo $_SESSION['videolink'];

?>
<!DOCTYPE html>
<html>
<head>
<?php include('include/common.php'); ?>
<title>World Skills Competition | International Olympiad | Life Skills Test</title>
<link href="new_css/quiz.css" type="text/css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <link href="cssn/bootstrap.min.css" type="text/css" rel="stylesheet">
 <link href="new_css/cover.css" rel="stylesheet">
<!--<style>
body {
	background: url(img/First_page.jpg);
	background-repeat: none;
	background-size: 100%;
}
</style>-->
</head>



<body>

<style>
/*#wrapper{ background-color:#e5ebf1;}*/
.main-menu ul li{ width:22.3%; display:inline-block; text-align:center; position:relative; border-radius:4px; border:1px solid #e3e3e2; margin-right:15px;}
.main-menu ul li a img{  margin-top: 20px; padding-bottom: 30px;}
.main-menu ul li a{ color:#000;}
.main-menu ul li a span{ padding:4px 0px; text-transform:uppercase;}
.main-menu ul li:nth-child(4){ margin-right:0px;}
.main-menu ul li:nth-child(1) a span{ font-weight:bold; font-size:18px; background-color:#5cb85c; text-align:center; color:#fff; position:absolute; left:0px; right:0px; bottom:0px; border-radius:0px 0px 4px 4px;}
.main-menu ul li:nth-child(2) a span{ font-weight:bold; font-size:18px; background-color:#4cb1cf; text-align:center; color:#fff; position:absolute; left:0px; right:0px; bottom:0px; border-radius:0px 0px 4px 4px;}
.main-menu ul li:nth-child(3) a span{ font-weight:bold; font-size:18px; background-color:#f0433d; text-align:center; color:#fff; position:absolute; left:0px; right:0px; bottom:0px; border-radius:0px 0px 4px 4px;}
.main-menu ul li:nth-child(4) a span{ font-weight:bold; font-size:18px; background-color:#f0ad4e; text-align:center; color:#fff; position:absolute; left:0px; right:0px; bottom:0px; border-radius:0px 0px 4px 4px;}
.name-menu{ color:#000; margin-bottom:25px;  font-size:26px; display:block; border-bottom:1px solid #e5ebf1; padding:0px 45px; }
.name-menu h3{ display:inline-block;}
.logout a{ float:right; color:#000;}
</style>
  <div class="Quiz_logo"><a href="index.php"><img src="img/logo.png"></a></div>
  <div class="container">
<div class="row panel panel-default">
<div class="col-md-6">
<h3>Name: <?php echo $_SESSION["Student_Name"]; ?></h3>

<h3>Grade: <?php echo $_SESSION['Classs'];?></h3>
</div>

<div class="col-md-6">
<h3 align="right" style="float:right"><a style="color:#000; font-size:26px;" href="logout.php">Log out</a></h3>
<div class="logout"><a href="logout.php"></a></div>
</div>
</div>
</div>
  
<div class="name-menu">

</div>
<div class="clearfix"></div>
<h1 align="center" style="margin-bottom:25px;">ILSO Preparation Material</h1>
<div style="text-align:center; margin-bottom:20px;">
<div class="main-menu">
<ul>
<li>
 <?php
$sql="select file,student_name from syllabus inner join studentt on syllabus.Classs=studentt.Classs where student_id=$_SESSION[student_id]";
	$result_set=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result_set)){
	?>
<a href="uploads/<?php echo $row['file'] ?>" target="_blank">
<img src="img/Syllabus-Icon.png"/>
 <span>Syllabus</span></a></li>
 
 <?php }?>
<li>
   <?php   $sql="select file,student_name from guide inner join studentt on guide.Classs=studentt.Classs where student_id=$_SESSION[student_id]";
	$result_set=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>

<a href="uploads/<?php echo $row['file'] ?>" target="_blank">
<img src="img/lifeskills-guide.png" />
<span>Lifeskills Guide</span>
</a></li><?php } ?>
<li><a href="practicequestion.php">
<img src="img/practice-questions.png"/>
<span>Practice Questions</span>
</a></li>
<li><a href="instruction.html">
<img src="img/mock-test.png" />
<span>Mock Test</span>
</a></li>


</ul>
</div>
</div>
<?php include('footer.php'); ?>
</body>

</html>
