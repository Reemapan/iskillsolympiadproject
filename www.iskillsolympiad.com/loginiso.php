<script>
window.location.href='https://iskillsolympiad.org/loginiso.php';
</script>
<?php
ob_start();
session_start();
$msg='';
$msg1='';

include('include/constant.php'); 
if(isset($_POST["submit"]))
{
    error_reporting(E_ALL);
$result=mysqli_query($con,"select Classs,Student_Name,student_id,group_id from studentt where Email='$_POST[email]' and password='$_POST[pw]' and status=1");
$result1=mysqli_query($con,"select Email,Classs,country,Student_Name,student_id,group_id from studentt where Email='$_POST[email]' and password='$_POST[pw]'");
if(mysqli_num_rows($result) == 1)
	 {
$row=mysqli_fetch_array($result);

$_SESSION["Student_Name"]=$row["Student_Name"];		 
$_SESSION["usrtype"]="Student";
$_SESSION['Classs']=$row["Classs"];
$_SESSION['Email']=$row["Email"];
$_SESSION["student_id"]=$row["student_id"];
$_SESSION['group_id']=$row["group_id"];
header( "Location: studentprofile.php" );
$msg='Login Successfull';
	 }
	 elseif(mysqli_num_rows($result1) == 1)
	 {
$row=mysqli_fetch_array($result1);
		 		 
$_SESSION["Student_Name"]=$row["Student_Name"];
$_SESSION["country"]=$row["country"];
$_SESSION["usrtype"]="Student";
$_SESSION['grade']=$row["Classs"];
$_SESSION['Email']=$row["Email"];
$_SESSION["student_id"]=$row["student_id"];
$_SESSION['group_id']=$row["group_id"];
header( "refresh:1; url=payment.php" );
$msg='Login Successfull please complete payment';
	 }
else $msg1="Invalid username and password";
	
	 
}

?>


<!DOCTYPE html>
<html><head>
<?php include('include/common.php'); ?>
<title>International Life Skills Olympiad | Life Skills Test</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
<link rel="shortcut icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<link rel="icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
 <link href="Partner_School_Registeration_files/css.css" rel="stylesheet" type="text/css">
 <link href="cssn/bootstrap.min.css" rel="stylesheet" type="text/css">
 <script src="Partner_School_Registeration_files/jquery.js"></script>
  
 <style>
body
/*{
background:url(img/First_page.jpg);
background-repeat:none;
background-size:100%;
}*/
.form > p {
    font-size: 21px;
    margin: 0px;
    text-align: center; padding:10px; color:#fff; background-color:#4d70a8; margin-bottom:15px;
}
.new-reg{color:#fff; background-color:#f1565c; display:inline-block; text-align:center; font-size:16px; border-radius:4px; padding:5px 12px;}
.new-reg:hover{ font-size:16px; color:#fff;  background-color: #f64b52;}
.login-submit{ float:left;  width:92%; margin-bottom:15px; background-color:#f1565c; font-size:18px; font-weight:bold ; color:#fff; padding:4px 0px; border-radius:4px;}
.login-submit:hover{ background-color: #f64b52; cursor:pointer;}
.error {color: #FF0000;}
.success{color:#f1565c;
}
</style>
<link href="new_css/cover.css" rel="stylesheet">

<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.name.value;
if (mt.length<1) {
alert("Please Enter Email Id");
document.form1.name.focus();
return false;
}
tt=document.form1.pw.value;
if(tt.length<1) {
alert("Please Enter Password");
document.form1.pw.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<div class="wrappper">
<div class="line">&nbsp;</div>
<div class="Quiz_logo"><a href="index.php"><img src="new_img/Web_logo1.png" alt="" /></a></div>
<div style="text-align:center; margin-bottom:18px;">
<div class="form" style="top:74px; position:static; margin:auto; float:none; padding-bottom:35px;  margin-top:35px">
<p>Login for ILSO 2017-18</p>
 <form name="form1" method="post" onSubmit="return check();">
<ul>
<!--<div class="drop"><label>User Type:</label><select name="usrtype" required> 
<option value="">User Type</option>
<option value="Student">Student</option>
<option value="School">School</option>
</select></div> -->
<!--<li>
<p>Email Id:</p>
</li> -->
<li><input type="text" name="email" id="name"  placeholder="Enter Email Id"  style="margin-bottom:18px !important;  padding:5px 0px !important;" /></li>
<!--<li>
<p>Password:</p>
</li> -->
<li><input type="password" name="pw" id="pw"  placeholder="Enter Password" style="margin-bottom:0px !important; padding:5px 0px !important;"  />
<a href="updatepass.php"  style="color:#337ab7; float:left; margin-bottom:15px; width:92%; display:inline-block; text-align:right;">Forgot Password? Click Here</a>

</li>
<li>
<div class="center">
<button name="submit" type="submit" class="login-submit"> Login</button>
<br>
<div style="text-align:center; width:90%;">
<span>New to ILSO?</span><br>
  <a href="registeriso.php" class="new-reg" > Register</a>
  </div>
</div>
</li>
</ul>
</form>
<span style="color:green; font-size:24px;"><?php echo $msg; ?></span>
<span style="color:red; font-size:24px;"><?php echo $msg1; ?></span>
</div>

</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>


<?php ob_flush(); ?>