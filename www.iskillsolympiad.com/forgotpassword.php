<?php
session_start();
$msg='';
include("include/constant.php");

if(empty($_GET['name'])){ header('Location: index.php'); exit(); }
if(isset($_POST[submit]))
{
	
$sql=mysqli_query($con,"SELECT * FROM `studentt` WHERE  Email='$_POST[email]'");
if(mysqli_num_rows($sql) == 1)
		{
			$set=1;
		}
		else
		$msg= "Invalid  and Email";	
	}

if(isset($_POST[submit1]))
		{
			$sql1="update studentt set password='$_POST[pass2]' where Email='$_POST[email]'";
			if(mysqli_query($con,$sql1))
        {
				$msg= "Passowrd Updated Successfully";
                                      header( "refresh:3; url=loginiso.php" );
			}
		}

//include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('include/common.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="new_css/cover.css" />
<title>World Skills Competition | International Olympiad | Life Skills Test</title>
<script type="text/javascript">

function pvalidate() {

if (document.registration.pass1.value != document.registration.pass2.value)
{
        alert('Passwords did not match!');
        return false;
}
else
{
document.registration.submit();
return true;
}
}
</script>
<style>
/*body
{
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
<div class="line">&nbsp;</div>
<div class="Quiz_logo"><a href="index.php"><img src="Partner_School_Registeration_files/logo.png" alt="" /></a></div>
   <div style="text-align:center; margin-bottom:18px;">
<div class="form" style="top:74px; position:static; margin:auto; float:none; padding-bottom:50px;  margin-top:35px">
   <p style="font-size: 21px; margin: 0px; text-align: center; padding: 10px;  color: #fff; background-color: #4d70a8 !important; margin-bottom: 15px;">FORGOT PASSWORD</p>                 
<?php
if($set!=1)
{
	?>
<center><font size="5"><?php echo $msg;?></font></center>
<form action="" method="post">
<ul>
<li><input type="email" name="email" placeholder="email"  style="margin-bottom:18px !important;  padding:5px 0px !important;"  /></li>
<li><!--<input type="submit" name="submit" style="font-size:14px" class="CSSButton" />-->
<button name="submit" type="submit" class="login-submit"> submit</button></li>
</ul>

</form>

<?php
}
if($set == 1)
{?>
<form action="" method="post" name="registration">
<ul>
<li><input  type="text" name="email" value="<?php echo $_POST[email];?>" readonly="readonly"  style="margin-bottom:18px !important;  padding:5px 0px !important;" /></li>
<li><input type="password" name="pass1" id="pass1" placeholder="newpswd" title="newpswd"  style="margin-bottom:18px !important;  padding:5px 0px !important;"/></li>
<li><input type="password" name="pass2" id="pass2" placeholder="confirm password" title="confirm password"  style="margin-bottom:18px !important;  padding:5px 0px !important;" /></li>
<li>
<button name="submit1" type="submit"   onclick="return pvalidate()" class="login-submit"> submit</button>
<!--<input type="submit" name="submit1"  onclick="return pvalidate()" style="font-size:14px"  />--></li>
</ul>

  </form><?php
}
?>
</div>
</div>					
<?php include('footer.php'); ?> 
</body>
</html>