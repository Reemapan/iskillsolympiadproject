<?php session_start();
include('include/constant.php'); ?>
<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="TwBJboXe";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
           $st=1;
		   $upatestaus1=mysqli_query($con,"UPDATE studentt SET status='$st' WHERE Student_Name='$firstname' and Email='$email'");
		   	$upatestaus=mysqli_query($con,"UPDATE orders SET status='$st',`txn_id`='".$_POST[txnid]."',`payment_status`='".$_POST[status]."',`payment_date`=NOW(),`payer_email`='".$_POST[email]."' 
WHERE  customerid='$email'");
           	   
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
		  echo "<h4>Your Name ID for this Name is ".$firstname.".</h4>";
		  echo "<h4>Your Email ID for this Email is ".$email.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
$to = "$email,himanshugupta9467@gmail.com";
  $subject = "Welcome To International Life Skills Olympiad! payment successful";
  $message = "Hi,<br>Welcome To ILSO - We are very pleased to have you onboard!<br>Your registration has been successful.<br> <br><b> user email:</b> $email<br><br>You have just joined a mission to lead billions of children to learn management skills required for the 21st century. what are more? we are the World's 1st to create a multidisciplinary platform for young children to participate.";
  $header = "MIME-Version: 1.0" . "\r\n";
  $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
  $header .= "From:info@iskillsolympiad.org \r\n";
  $retval = mail ($to,$subject,$message,$header);
  

	   }
?>	</div>
 <meta http-equiv="refresh" content="7;url=http://www.iskillsolympiad.org/loginiso.php" />
 <br class="clear"/>
 </div>
           
		  