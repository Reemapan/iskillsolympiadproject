<script>
window.location.href='https://iskillsolympiad.org/registeriso.php';
</script>
<?php
include('include/constant.php');
session_start();
$snameErr = $pnameErr = $emailErr = $phoneErr = $gradeErr = $genderErr = $countryErr = "";
$sname = $pname = $email = $phone = $grade = $gender = $country = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sname"])) {
    $snameErr = "Student Name is required";
} else {
    $sname = test_input($_POST["sname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {
      $snameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["pname"])) {
    $pnameErr = "Parent Name is required";
  } else {
    $pname = test_input($_POST["pname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {
      $pnameErr = "Only letters and white space allowed"; 
    }
  }
   if (empty($_POST["gender"])) {
    $genderErr = "Student Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
     $email = test_input($_POST["email"]);
     $run1=mysqli_query($con,"SELECT * FROM `studentt` WHERE `Email`='$email'");
	  if(mysqli_num_rows($run1)>0){
	$emailErr = "Email-id already exists"; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
 
	 }
  }
  
  
 
if (empty($_POST["grade"])) {
               $gradeErr = "You must select grade";
            }else {
               $grade = $_POST["grade"];	
            }
			 if (empty($_POST["phone"])) {
    $phoneErr = "Parent's phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($phone)) {
      $phoneErr = "Only number  allowed"; 
    }
  }
 
if (empty($_POST["country"])) {
               $countryErr = "You must select country";
            }else {
              $country = $_POST["country"];
            }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_POST['submit'])){
	
if (empty($_POST["sname"])) {
    $snameErr = "Student Name is required";
  } else {
    $sname = test_input($_POST["sname"]);
    // check if name only contains letters and whitespace
    
  
  if (empty($_POST["pname"])) {
    $pnameErr = "Parent Name is required";
  } else {
    $pname = test_input($_POST["pname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {
      $pnameErr = "Only letters and white space allowed"; 
    }
	 if (empty($_POST["gender"])) {
    $genderErr = "Student Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
	  $email = test_input($_POST["email"]);
     $run1=mysqli_query($con,"SELECT * FROM `studentt` WHERE `Email`='$email'");
	  if(mysqli_num_rows($run1)>0){
	$emailErr = "Email-id already exists"; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
}

if (empty($_POST["grade"])){
               $gradeErr = "You must select grade";
            }else {
               $grade = $_POST["grade"];	
            }
			
 if (empty($_POST["phone"])) {
    $phoneErr = "Parent's phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($phone)) {
      $phoneErr = "Only number  allowed"; 
    }
  
  

if (empty($_POST["country"])) {
               $countryErr = "You must select country";
            }else {
              $country = $_POST["country"];
   if(empty($snameErr) && empty($pnameErr) && empty($emailErr) &&empty($phoneErr)){          

  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
 $password = substr( str_shuffle( $chars ), 0, 8 );

if($_POST['grade']>=4 and $_POST['grade']<=5){
  $sql="insert into olympiad1.studentt(Student_Name,School_Name,Parent_Name,Email,password,Classs,Gender,Phone_No,country,group_id,ref_code)values ('".$_POST['sname']."','".$_POST['school']."','".$_POST['pname']."','".$_POST['email']."','$password','".$_POST['grade']."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['country']."','1','".$_POST['ref_code']."')";

}

elseif($_POST['grade']>=6 and $_POST['grade']<=7){
  $sql="insert into olympiad1.studentt(Student_Name,School_Name,Parent_Name,Email,password,Classs,Gender,Phone_No,country,group_id,ref_code)values
	('".$_POST['sname']."','".$_POST['school']."','".$_POST['pname']."','".$_POST['email']."','$password','".$_POST['grade']."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['country']."','2','".$_POST['ref_code']."')";

}
elseif($_POST['grade']>=8 and $_POST['grade']<=10){
  $sql="insert into olympiad1.studentt(Student_Name,School_Name,Parent_Name,Email,password,Classs,Gender,Phone_No,country,group_id,ref_code)values
	('".$_POST['sname']."','".$_POST['school']."','".$_POST['pname']."','".$_POST['email']."','$password','".$_POST['grade']."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['country']."','3','".$_POST['ref_code']."')";

}
 elseif($_POST['grade']>=11 and $_POST['grade']<=12){
  $sql="insert into olympiad1.studentt(Student_Name,School_Name,Parent_Name,Email,password,Classs,Gender,Phone_No,country,group_id,ref_code)values	 ('".$_POST['sname']."','".$_POST['school']."','".$_POST['pname']."','".$_POST['email']."','$password','".$_POST['grade']."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['country']."','4','".$_POST['ref_code']."')";

}
	
  }}}}}}}
	
	$res=mysqli_query($con,$sql);
	if(!$res){
        echo mysqli_error($con);
    }
    
if(mysqli_affected_rows($con)==1){	
				
		
				 $_SESSION["Student_Name"]=$_POST['sname'];
				 $_SESSION["Email"]=$_POST['email'];	
				 $_SESSION["grade"]=$_POST['grade'];	
				 $_SESSION["country"]=$_POST['country'];	
			
			
			$to = "$email";
  $subject = "Welcome to the ILSO 2017";
  $message = "Hi <b>$sname</b><br>Welcome to the ILSO 2017- we are pleased to have you onboard.<br>Your registration has been done successfully.<br> <br><b> Your EmailId:</b> $email <br><br>
  <b>Your Password:</b> $password<br><br>You are now part of an elite worldwide group of young children who will embark upon acquiring Critical Life Skills and preparing to lead the world in the 21st century.<br /> 
Now you are just one step  away from enrolling yourself in the world's 1st online Life Skills Olympiad.<br />
<b><a href='http://iskillsolympiad.org/loginiso.php'>Click on the following link and complete the process</a></b>
<br />After enrollment, you will have unlimited free access to the ILSO preparation zone which includes age appropriate Life Skill Guides,
Situation based Question Bank and Mock Tests.
<br> <br>Regards,<br>
  ILSO Global Secretariat<br />
16 Raffles Quay<br>
#41-01 Hong Leong Building<br>
Singapore 048581<br>
Email: info@iskillsolympiad.org";
  $header = "MIME-Version: 1.0" . "\r\n";
  $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
  $header .= "From:info@iskillsolympiad.org \r\n";
  $retval = mail($to,$subject,$message,$header);
			
}
	}

 if(isset($_SESSION['Email'])){
?>
<div id="overlay"></div>
<div id="popup" class="panel-body">
    <div class="popupcontrols">
        <span id="popupclose"><a href="logout.php">X</a></span>
    </div>
    <div class="popupcontent">
	  <div class="modal-header">
        <h4 class="modal-title" align="center" style="color:green"><strong>Registeration Successfull !</strong></h4>
      </div>
      <div class="clearfix">
        <h3 class="pass-text"><strong>Password has been sent to your Registered Email Id</strong></h3>
      </div>
      <div class="modal-footer">
      <div class="text-center">
       <a href="payment.php" style="color:#fff;" class="btn success-fully">Proceed to Payment..</a>
       </div>
       </div>
    </div>
</div>

<script type="text/javascript">
    // Initialize Variables
    var closePopup = document.getElementById("popupclose");
    var overlay = document.getElementById("overlay");
    var popup = document.getElementById("popup");
    var button = document.getElementById("button");
	var document=document;
    // Close Popup Event
    closePopup.onclick = function() {
        overlay.style.display = 'none';
        popup.style.display = 'none';
		
    };
    // Show Overlay and Popup
    button.onclick = function() {
        overlay.style.display = 'block';
        popup.style.display = 'block';
    }	    
	
	document.onload = function() {
        overlay.style.display = 'block';
        popup.style.display = 'block';
    }

</script>
<?php } ?>
<html>
<head>
<?php include('include/common.php'); ?>
<title>International Life Skills Olympiad | Life Skills Test</title>
<link rel="shortcut icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<link rel="icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<link href="new_css/quiz.css" type="text/css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link href="new_css/cover.css" rel="stylesheet">
<link href="flag/css/flag.css" type="text/css" rel="stylesheet">
<link href="cssn/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<style>
/*body { background: url(img/First_page.jpg); background-repeat: none; background-size: 100%; }*/
.step-btn { background-color: #f64b52 !important; border-radius: 4px; color: #fff !important; display: inline-block; font-size: 24px; margin: auto auto 15px; padding: 0 15px; text-align: center; }
.step-btn:hover { background-color: #006633; color: #fff; font-size: 24px; }
.info-box ul li { width: 100%; margin-bottom: 8px; font-size: 20px; list-style: none; }
.info-box ul li img { margin-right: 5px; }
.pay-button{ display:block; text-align:center;}
input[type=radio].radio-btn { position: absolute; z-index: -1000; left: -1000px; overflow: hidden; clip: rect(0 0 0 0); height: 1px; width: 1px; margin: -1px; 
padding: 0; border: 0; }
input[type=radio].radio-btn + label.css-label { padding-left: 26px; height: 21px; display: inline-block; line-height: 21px; background-repeat: no-repeat; 	background-position: 0 0; font-size: 16px; margin-right:30px; vertical-align: middle; cursor: pointer; }
input[type=radio].radio-btn:checked + label.css-label { background-position: 0 -21px; }
label.css-label { background:url(payment/img/radio-bg.png); -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none;
	-ms-user-select: none; user-select: none; }
	.but-box{ padding-top:20px;}
	.login-link{ color:#06F !important; padding-left:10px;}
	.box-heading{ margin-top:0px; margin-bottom:15px; padding:20px 0px; color:#fff; text-align:center; background-color:#4d70a8;}
.error {color: #FF0000; font-size:16px;}
.success-fully{ background-color: #f1565c; font-size: 20px; font-weight: bold; padding: 7px 40px;} 
	.success-fully:hover{  font-size: 20px; background-color: #f64b52;}
	.pass-text{ font-size:22px; text-align:center;}
	 #overlay { display: block; position: absolute; top: 0; bottom: 0; background: #999; width: 100%; height: 100%; opacity: 0.8; z-index: 100; }
        #popup { display: block; position: absolute; left: 50%; background-color:#fff; width: 520px; top: 50%;  margin-left: -250px;  margin-top: -250px;  z-index: 200; }
        #popupclose { float: right; padding: 10px; cursor: pointer; }
		.popupcontent a{ text-decoration:none; padding:10px; color:white; border:2px solid #ff4d4d; background-color:red; }
      
</style>
</head>
<style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>
<body>
  <div class="Quiz_logo">
  <a href="index.php"><img src="new_img/Web_logo1.png"></a></div>
  
  <!--<div class="nav">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="school.php">ADD SCHOOL</a></li>
    <li><a href="student.php">ADD STUDENT</a></li>
						 <li><a href="report.php">REPORT</a></li>
						
							<li><a href="logout.php">LOG OUT</a></li>
					
					</ul>
				
				</div> --> 
  
<div class="container">
<div class="row">
<div class="col-md-12 text-center panel panel-default">
<ul class="flow-chart">
<li><b>1</b>. Registration</li>
<li><b>2</b>. Payment</li>
<li><b>3</b>. ILSO Preparation Zone</li>
</ul>
<ul class="flow-chart-active">
<li class="goal active"></li>
<li class="stick"></li>
<li class="goal"></li>
<li class="stick"></li>
<li class="goal"></li>
</ul>

</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12"><h3 align="center" style="margin-bottom:18px; color:#3d464d;"><strong>After Registration, you will get free access to the ILSO Preparation Zone</strong> </h3></div>
<div class="col-md-7">
<div class=" panel panel-default clearfix" style="background-color:#fbfbfb; border:1px solid #bdc4c9;">
  <h3 class="box-heading"><strong>Student Registration Form</strong></h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <div class="form-group clearfix">
  <div class="col-md-6"> 
  
<h4>Student's Name <small class="error">*</small>: </h4><small class="error"> <?php echo $snameErr;?></small>
<input maxlength="500" name="sname"  class="form-control"  type="text" value="<?php echo $sname;?>">
</div>
  <div class="col-md-6">
  <h4>Parent's Name: <small class="error">*</small> </h4><span class="error"><?php echo $pnameErr;?></span>
  <input   class="form-control"  name="pname" type="text" value="<?php echo $pname;?>">
  </div>
</div> 
 <div class="form-group clearfix">
  <div class="col-md-6">
  <div class="paypal-menu">
  <h4>Student's Gender:<small class="error"> *</small> </h4><span class="error"><?php echo $genderErr;?></span>
 <input type="radio"  id="boy" class="radio-btn" name="gender" <?php if (isset($gender) && $gender=="Boy") echo "checked";?> value="Boy">
<label for="boy" class="css-label"> Boy </label>
<input type="radio"  id="girl" class="radio-btn" name="gender" <?php if (isset($gender) && $gender=="Girl") echo "checked";?> value="Girl">
<label for="girl" class="css-label" >Girl  </label>
</div>
  </div>
   <div class="col-md-6">
   <h4>Parent's Email ID: <small class="error"> *</small> </h4><span class="error"><?php echo $emailErr;?></span>
    <input maxlength="50" name="email"  class="form-control"   placeholder="Enter E-mail Address " type="email" value="<?php echo $email;?>">
   </div>
  </div>
  <div class="form-group clearfix">
  <div class="col-md-6">
  <h4>Student's Grade:<small class="error"> *</small></h4><span class="error"><?php echo $gradeErr;?><b style="color:#339933"><?php echo $grade;?></b></span>
  <select  name="grade" class="form-control">
        <option value="<?php echo $grade;?>">Select Grade</option>
          
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
  </div>
  <div class="col-md-6">
 <h4>Parent's Phone Number: <small class="error"> *</small> </h4><span class="error"><?php echo $phoneErr;?></span>
   <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>">
  </div>
  </div>
    <div class="form-group clearfix">
    <div class="col-md-6">
 <h4>School's Name & Address: <small class="error"> *</small> </h4><span class="error"><?php echo $phoneErr;?></span>
   <textarea name="school" class="form-control" value="<?php echo $school;?>">
        </textarea></div>
  
    <div class="col-md-6">  
  <h4>Country<small class="error"> *</small>:</h4><span class="error"> <?php echo $countryErr;?><b style="color:#339933"><?php echo $country;?></b></span>
      
  <select id="country" name="country" class="form-control">
          <option value="<?php echo $country;?>">Select Country</option>
          
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antartica">Antartica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Brazil">Brazil</option>
          <option value="British Virgin Islands">British Virgin Islands</option>
          <option value="Brunei">Brunei</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burma">Burma</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Clipperton Island">Clipperton Island</option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
          <option value="Congo, Republic of the">Congo, Republic of the</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote d'Ivoire">Cote d'Ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czeck Republic">Czeck Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Europa Island">Europa Island</option>
          <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia, The">Gambia, The</option>
          <option value="Gaza Strip">Gaza Strip</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Glorioso Islands">Glorioso Islands</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guernsey">Guernsey</option>

          <option value="Guinea">Guinea</option>
          <option value="Guinea-Bissau">Guinea-Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
          <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Howland Island">Howland Island</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iran">Iran</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Ireland, Northern">Ireland, Northern</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Jan Mayen">Jan Mayen</option>
          <option value="Japan">Japan</option>
          <option value="Jarvis Island">Jarvis Island</option>
          <option value="Jersey">Jersey</option>
          <option value="Johnston Atoll">Johnston Atoll</option>
          <option value="Jordan">Jordan</option>
          <option value="Juan de Nova Island">Juan de Nova Island</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea, North">Korea, North</option>
          <option value="Korea, South">Korea, South</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Laos">Laos</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libya">Libya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macau">Macau</option>
          <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Man, Isle of">Man, Isle of</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
          <option value="Midway Islands">Midway Islands</option>
          <option value="Moldova">Moldova</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcaim Islands">Pitcaim Islands</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romainia">Romainia</option>
          <option value="Russia">Russia</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Scotland">Scotland</option>
          <option value="Senegal">Senegal</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
          <option value="Spain">Spain</option>
          <option value="Spratly Islands">Spratly Islands</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard">Svalbard</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syria">Syria</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Tobago">Tobago</option>
          <option value="Toga">Toga</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad">Trinidad</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Uruguay">Uruguay</option>
          <option value="USA">USA</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Virgin Islands">Virgin Islands</option>
          <option value="Wales">Wales</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="West Bank">West Bank</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Yugoslavia">Yugoslavia</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
  </div>
  </div>
    <div class="form-group clearfix">
        <div class="col-md-6">
        <h4>Referral Code <small class="error"> *</small> </h4><span class="error"><?php echo $phoneErr;?></span>
      <input type="text" name="ref_code" class="form-control" />
  </div>
    </div>
    
  <div class="col-md-12">
    <div class="text-center but-box">
    <button class="btn step-btn" name="submit" >Register</button>
   <a href="loginiso.php" class="login-link">Existing User ? Login</a><!--<button class="step-btn" >Proceed to Payment</button>--></div>
    </div>
    
  </form>
</div>
</div>
<div class="col-md-5">
<div class="info-box panel panel-default panel-body">
 <h5 style="color:#3d464d; "><strong>What's included in the ILSO Preparation Zone?</strong></h5>
    <p><img src="img/right1.png" />&nbsp; LifeSkills Guide</p>
    <p><img src="img/right1.png" /> &nbsp; 200+ Questions Banks</p>
    <p><img src="img/right1.png" /> &nbsp; Real Life Practise Questions</p>
    <p><img src="img/right1.png" /> &nbsp; 5 Mock Tests</p>
 
</div>

</div>
</div>
</div>
<!--Registeration Successfull popup -->
<div id="media-share" class="modal fade">
  <div class="modal-dialog clearfix">
    <div class="modal-content clearfix">
      <div class="modal-header">
       <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
       <!-- <h4 class="modal-title" align="center" style="color:green"><strong>Registeration Successfull !</strong></h4>-->
      </div>
      <!--<div class="modal-body clearfix">
        <h3 class="pass-text"><strong>Password has been sent to your Registered Email Id</strong></h3>
      </div>-->
      <!--<div class="modal-footer">
      <div class="text-center">
       <a href="payment.php" style="color:#fff;" class="btn success-fully">Proceed to Payment..</a>
       </div>
       </div>-->
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
</body>
</html>
<?php include('footer.php'); ?>

