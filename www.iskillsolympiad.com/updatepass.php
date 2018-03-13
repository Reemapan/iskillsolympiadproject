<?php
session_start();
$msg='';
include('include/constant.php'); 
if(isset($_POST["submit"]))
{
	
      $sql=mysqli_query($con,"SELECT * FROM studentt WHERE Email='".$_POST['email']."'");
  $num=mysqli_num_rows($sql); 
 if($num>0){
  $fetch=mysqli_fetch_array($sql);
  
   
   $to = $fetch['Email'];
   $subject = "Password recovery mail";
   $message = "Click on link to update password<a href='http://iskillsolympiad.org/forgotpassword.php?name=0f2c248f421c41e8cf1e1a80e3b011e4'>click here to recover password</a>";
  $header = "MIME-Version: 1.0" . "\r\n";
  $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
 $header .= "From:info@iskillsolympiad.org \r\n";
   $retval = mail ($to,$subject,$message,$header);
   
   if($retval){  $msg='Check mail to recover password';}
   else{ $msg='error while sending mail'; }
 }else{
 
 $msg='Email-Id not exist!!';
 }
	}
	 


?>


<!DOCTYPE html>
<html><head>
<?php include('include/common.php'); ?>
<title>World Skills Competition | International Olympiad | Life Skills Test</title>



<meta http-equiv="content-type" content="text/html; charset=windows-1252">
 <link href="Partner_School_Registeration_files/css.css" rel="stylesheet" type="text/css">
 <script src="Partner_School_Registeration_files/jquery.js"></script>
<link href="new_css/cover.css" rel="stylesheet">
<style>
<style>
/*{
background:url(img/First_page.jpg);
background-repeat:none;
background-size:100%;
}*/

.new-reg{color:#fff; background-color:#f1565c; display:inline-block; text-align:center; font-size:16px; border-radius:4px; padding:5px 12px;}
.new-reg:hover{ font-size:16px; color:#fff;  background-color: #f64b52;}
.login-submit{ float:left;  width:92%; margin-bottom:15px; background-color:#f1565c; font-size:18px; font-weight:bold ; color:#fff; padding:4px 0px; border-radius:4px;}
.login-submit:hover{ background-color: #f64b52; cursor:pointer;}
.center{ display:inline;}
.f_full
{ position:absolute; left:0px; right:0px; bottom:0px;}
</style>


</head>
<body>
<div class="wrappper">
<div class="line">&nbsp;</div>
<div class="Quiz_logo"><a href="index.php"><img src="new_img/Web_logo1.png" alt="" /></a></div>
<div style="text-align:center; margin-bottom:18px;">
<div class="form" style="top:74px; position:static; margin:auto; float:none; padding-bottom:35px;  margin-top:35px">
 <p style="font-size: 21px; margin: 0px; text-align: center; padding: 10px;  color: #fff; background-color: #4d70a8 !important; margin-bottom: 15px;">Recover Password</p>
 <form method="post">
<ul>
<!--<div class="drop"><label>User Type:</label><select name="usrtype" required> 
<option value="">User Type</option>
<option value="Student">Student</option>
<option value="School">School</option>
</select></div>-->
<?php /*?><li>
<p>User Name:</p>
</li>
<li><input type="text" name="name"   placeholder="User Name" /></li><li><?php */?>
<li><h3><?php echo $msg;?> </h3></li>
<li><input type="text" name="email"  placeholder="Email" style="margin-bottom:18px !important;  padding:5px 0px !important;" /></li>
<li>
<!--<div class="center"><input  name="submit" type="submit" value="send" /></div>-->
<div class="center">
<button name="submit" type="submit" class="login-submit"> Send</button>

</div>
</li>
</ul>
</form>
</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>