
<?php
ob_start();
session_start();
include('include/constant.php');
?>
<script language="javascript" type="text/javascript">
		
function goback2(){		
		window.document.location.href="index.php";
		}
</script>
<?php
//print_r($_POST);
if($_REQUEST[pageid]=='success' && $_POST['payment_status'] != ""){
 
	

		if ($_POST['payment_status'] == "Completed") {
		$st=1;
		$upatestaus=mysqli_query($con,"UPDATE orders SET status='st',`txn_id`='".$_POST[txn_id]."',`payer_id`='".$_POST[payer_id]."',`payment_status`='".$_POST[payment_status]."',`payment_date`='".$_POST[payment_date]."',`payer_email`='".$_POST[payer_email]."' 
WHERE customerid=".$_REQUEST['customerid']);
	$upatestaus1=mysqli_query($con,"UPDATE studentt SET status='1' WHERE Email=".$_REQUEST['customerid']);	
  
         $selectsql=mysqli_query($con,"select Email from studentt where Email=".$_REQUEST['customerid']);	
  
            $select_result=mysqli_fetch_assoc($selectsql);
  
	     $email=$select_result['Email'];
  
	     $to = $email;
         $subject = "Registration Successfull";
         $msg='<table>
	 <tr><td colspan="3">Thank You for Registration. You are successfully enrolled for iskillsolympiad test!! Your order-Id is '.$_REQUEST['order_id'].' </td></tr>
	</table>   ';
  $header = "MIME-Version: 1.0" . "\r\n";
  $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
  $header .= "From:info@iskillsolympiad.org \r\n";
   $retval = mail ($to,$subject, $msg,$header);
		
  
  echo '<h3>Successful transaction</h3>
		<p>Thank you for your transaction.Your order-Id is '.$_REQUEST['order_id'].'. You will be receiving a confirmation of your payment via e-mail shortly.
	If you have any questions relating to it please do not hesitate to contact us.</p>';
  
	} else{
	
	$upatestaus=$mysqli->query("UPDATE orders SET status='0',`txn_id`='".$_POST[txn_id]."',`payer_id`='".$_POST[payer_id]."',`payment_status`='".$_POST[payment_status]."',`payment_date`='".$_POST[payment_date]."',`payer_email`='".$_POST[payer_email]."' 
WHERE  customerid=".$_REQUEST['customerid']);
	
	echo '<h3> Transaction Pending</h3>
		<p>Your transaction status is pending. Kindly complete the transaction!!</p>';
	
	}	
	
	
	}
	
	?>
</div>
 <meta http-equiv="refresh" content="4;url=http://www.iskillsolympiad.org/loginiso.php" />
 <br class="clear"/>
 </div>