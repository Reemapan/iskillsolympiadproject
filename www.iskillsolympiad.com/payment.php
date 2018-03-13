<?php ob_start();
session_start();
if(empty($_SESSION['Email'])){ header('Location: index.php');}
include('include/constant.php');
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
	//$ip='122.162.27.100'; 
    return $ip;
}


//$xmm = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".getRealIpAddr());219.75.27.16 ,59.103.198.105 ,135.245.168.33
$xmm = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".getRealIpAddr());
//$xmm = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=122.162.27.100");

   $currency3=$xmm->geoplugin_currencyCode ; 
  $cureny=$xmm->geoplugin_currencySymbol;
 //$currency2='INR';
  $c=$xmm->geoplugin_currencyConverter;
$amount=7.21;
$t1="$";
$t2=7.12;
 $country=$xmm->geoplugin_countryName;
 $countip=$xmm->geoplugin_request;
  $total1 = floatval($c) * $amount;
   $total= round($total1,2);

?>
<html>
<head>
<?php include('include/common.php'); ?>
 <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
 <link rel="shortcut icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<link rel="icon" href="new_img/favicon-32x32.png" type="image/x-icon">
 <link href="new_css/cover.css" rel="stylesheet">
 <link href="payment/payment.css" type="text/css" rel="stylesheet">
 <link href="cssn/bootstrap.min.css" type="text/css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<style>
/*body{background:url(img/First_page.jpg);background-repeat:none;background-size:100%;}*/
.step-btn{background-color: #f1565c;   border-radius: 4px;  color: #fff !important;  display: inline-block;   font-size: 24px; margin: 15px auto 15px; padding: 0 15px;
    text-align: center;}
.step-btn:hover{ background-color: #f1565c; color: #fff;  font-size: 24px;}
.payusingtext{ width:100%; border-bottom: 1px dotted #ccc; margin-bottom:15px;}
.payusingtext p{ display:inline-block; margin-right:10px; vertical-align:top;}
.payusingtext img{ display:inline-block; margin-right:5px;}
.payment-header{ width:98%; padding:10px;}
.payment-header h3{ display:inline-block;}
.payment-header p{ display:inline-block;}
.payment-header p:last-child{ float:right; display:inline-block;}
.card-box{ display:inline-block; margin:auto; width:97%; border:1px solid #ccc; border-radius:4px; background-color:#f6f6f6; padding-bottom:15px; margin-bottom:15px; padding:10px;}
.left-card{ display:inline-block; width:47%;}
.right-card{ display:inline-block;  width:48%;}
.payment-logo{ display:block; text-align:center; margin-bottom:20px;}
.payment-form{ padding:10px;}
.card-box input{ margin-bottom:15px;}
.bank-menu{ margin-top:15px;}
.bank-menu ul li{ list-style:none; display:inline-block; width:29.3%; margin-bottom:10px;}
.bank-menu ul li a img{ border:1px solid #ccc; padding:10px;}
.bank-list{ margin:15px 0px; width:94%;}
.paypal-menu input{ vertical-align:super;}
.paypal-menu img{ margin-right:20px;}
.info{ border:1px solid #ccc; background-color:#fff; border-radius:0px 0px 4px 4px; padding-top:15px; text-align:center; }
.info h2{ margin-bottom:5px;}
.info p{ margin-bottom:15px;}
.info p:last-child{ font-size:24px;}
.pay-button{ display:block; text-align:center;}
input[type=radio].radio-btn { position: absolute; z-index: -1000; left: -1000px; overflow: hidden; clip: rect(0 0 0 0); height: 1px; width: 1px; margin: -1px; 
padding: 0; border: 0; }
input[type=radio].radio-btn + label.css-label { padding-left: 26px; height: 21px; display: inline-block; line-height: 21px; background-repeat: no-repeat; 	background-position: 0 0; font-size: 21px; vertical-align: middle; cursor: pointer; }
input[type=radio].radio-btn:checked + label.css-label { background-position: 0 -21px; }
label.css-label { background:url(payment/img/radio-bg.png); -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none;
	-ms-user-select: none; user-select: none; }
.info-font{ font-size:18px; font-weight:600;}
.payoption ul li{ display:inline-block; list-style:none; background-color:transparent !important; padding:0px !important; margin-right:8px;}
.payoption ul li img{ height:36px; }
.box-heading{ margin-top:0px; margin-bottom:15px; padding:20px 0px; color:#fff; text-align:center; background-color:#4d70a8;}
.box-heading p{ display:inline-block;}
hr{ margin-bottom:0px; margin-top:12px;}
/* Position tooltip above the element */
.popover-title{ font-size:24px !important;}
</style>
<title>World Skills Competition | International Olympiad | Life Skills Test</title>
</head>
<body>
		<div class="Quiz_logo">
  <a href="index.php"><img src="new_img/Web_logo1.png"></a></div>
    
<div class="container">
<div class="col-md-12 text-center panel panel-default">
<ul class="flow-chart">
<li><b>1</b>.Registration</li>
<li><b>2</b>.Payment</li>
<li><b>3</b>.ILSO Preparation Zone</li>
</ul>
<ul class="flow-chart-active">
<li class="goal active"></li>
<li class="stick"></li>
<li class="goal active"></li>
<li class="stick"></li>
<li class="goal"></li>
</ul>

</div>

</div>
        <div class="container">
        <div class="row">
        <div class="col-md-12"><h3 align="center" style="margin-bottom:18px; color:#3d464d;"><strong>You are almost done to get free access to the ILSO Preparation Zone...</strong> </h3></div>  
        <div class="col-md-7">
<div class=" panel panel-default clearfix" style="background-color:#fbfbfb; border:1px solid #bdc4c9;">
  <h3 class="box-heading"><p>You Pay :</p> <p id="dollar_block" style="display:none;"> <?php  $currency2=$currency3;
  
  if("AUD" ==$currency2) { echo $currency2.' '; echo $total;}  elseif("CAD" ==$currency2) { echo $currency2.' '; echo $total;} 
  elseif("EUR" ==$currency2) { echo $currency2.' '; echo $total;} elseif("GBP" ==$currency2) { echo $currency2.' '; echo $total; }  
  elseif("JPY" ==$currency2) { echo $currency2.' '; echo $total;} elseif("USD" ==$currency2) { echo $currency2.' '; echo $total;}  
  elseif("NZD" ==$currency2) { echo $currency2.' '; echo $total; } elseif("CHF" ==$currency2) {  echo $currency2.' '; echo $total;}  
  elseif("HKD" ==$currency2) { echo $currency2.' '; echo $total; }   elseif("SGD" ==$currency2) { echo $currency2.' '; echo $total;}  
  elseif("SEK" ==$currency2) { echo $currency2.' '; echo $total;} elseif("DKK" ==$currency2) {echo $currency2.' '; echo $total;} 
  elseif("PLN" ==$currency2) { echo $currency2.' '; echo $total; }  elseif("NOK" ==$currency2) { echo $currency2.' '; echo $total; }  
  elseif("HUF" ==$currency2) { echo $currency2.' '; echo $total;} elseif("CZK" ==$currency2) {echo $currency2.' '; echo $total; }  
  elseif("ILS" ==$currency2) { echo $currency2.' '; echo $total; } elseif("MXN" ==$currency2) {echo $currency2.' '; echo $total;}
  elseif("BRL" ==$currency2) {  echo $currency2.' '; echo $total; }elseif("MYR" ==$currency2) {echo $currency2.' '; echo $total;}
  elseif("PHP" ==$currency2) { echo $currency2.' '; echo $total;}elseif("TWD" ==$currency2) { echo $currency2.' '; echo $total;}
  elseif("THB" ==$currency2) {  echo $currency2.' '; echo $total; } elseif("TRY" ==$currency2) {  echo $currency2.' '; echo $total;}
  elseif("RUB" ==$currency2) {   echo $currency2.' '; echo $total; }else  {  echo $t1.' '; echo $t2;}
	
  ?></p>
  <p id="rupes_block"><?php echo $cureny.' 490'; ?></p></h3>
  <div class="col-md-6"><p class="info-font"><?php echo $_SESSION["Student_Name"]; ?></p></div> <div class="col-md-6"><p class="info-font">Grade :<?php echo $_SESSION["grade"]; ?></hp></div>
      <div class="col-md-6"><p class="info-font"><?php echo $_SESSION["Email"]; ?></p></div>  <div class="col-md-6"><p class="info-font"><?php echo $_SESSION["country"]; ?></p></div>
      <div class="clearfix"></div>
      <hr/>	
 <div class="payment-form clearfix">
<!--<div class="payment-header">
<h3>Pay Using</h3>
<p><strong>You Paying Rs.500</strong></p>
</div> -->
<div class="paypal-menu text-center">

<span class="pull-left"><strong>PAY USING</strong></span>
<form action="paypal_payment.php" method="post">
 
  <?php if($currency2=='INR'){
 echo '
  <input type="radio"  name="payment" checked value="payu" id="payu" data-tooltip="Preferred By Indian User" class="radio-btn" onclick="remove_price(\'dollar_block\',\'rupes_block\')" />
 <label for="payu" class="css-label" title="Preferred By Indian User"  data-toggle="tooltip"> <img src="payment/img/payyou.png" /> </label>';}?>
 <input type="radio" name="payment" required  value="paypal" id="paypal"  class="radio-btn" onClick="remove_price('rupes_block','dollar_block')"/>
  <label for="paypal" class="css-label" title = "Preferred By Global User" data-toggle="tooltip"> <img src="payment/img/paypal.png" /> </label>
 <hr/>
 <button type="submit" name="payment_submit"   class="step-btn"> Proceed to Payment</button>
 </form> 
 <script>
function remove_price(id1,id2){

document.getElementById(id1).style.display="none";
document.getElementById(id2).style.display="inline-block";
}

</script>
</div>

<div class="pay-button">
</div>
<hr/>
<div class="payoption">
<ul>
<li><a href="#"><img src="img/master.png" /></a></li>
<li><a href="#"><img src="img/visa.png" /></a></li>
<li><a href="#"><img src="img/mastero.png" /></a></li>
<li><a href="#"><img src="img/discover.png" /></a></li>
<li><a href="#"><img src="img/american.png" /></a></li>
<li><a href="#"><img src="img/net-banking.png" /></a></li>

</ul>
</div>
</form>
<!--<form method="post">
<div id="ChildVerticalTab_1">
				<ul class="resp-tabs-list ver_1">
					<li>Creadit Card</li>
					<li>Net Banking</li>
					<li>Debit Card</li>
				</ul>
				<div class="resp-tabs-container ver_1">
					<div>
                    <div class="payusingtext">
                    <p>Pay Using Credit Card</p>
                   <img src="payment/img/visa.png" />
                     <img src="payment/img/master.png" />
                      <img src="payment/img/amrican.png" />
                       <img src="payment/img/discover.png" />
                    
                    </div>
                    <div class="card-box">
                    <input type="text" placeholder="Card number" />
                    <div class="left-card">
                    <p> Expiry Date</p>
                    <input type="text" placeholder="mm / yy">
                    </div>
                    <div class="right-card">
                    <p> CW</p>
                    <input type="text" placeholder="CW">
                    </div>
                    <p>Name on Card</p>
                    <input type="text" placeholder="Name on Card" />
                    <button type="button" class="step-btn">save and pay</button>
                    <p>This Card will be securely saved for a faster payment experience CW number will not be saved. </p>
                    </div>
                    
					
					</div>
                     
					<div>
                    <div class="payusingtext"><p>Pay Using Net Banking</p></div>
						<p>Popular Banks</p>
                      <div class="bank-menu">
                      <ul>
                      <li><a href="#"><img src="payment/img/hdfc.png" /></a></li>
                       <li><a href="#"><img src="payment/img/icici.png" /></a></li>
                        <li><a href="#"><img src="payment/img/citi-bank.png" /></a></li>
                         <li><a href="#"><img src="payment/img/statebank.png" /></a></li>
                          <li><a href="#"><img src="payment/img/axisbank.png" /></a></li>
                           <li><a href="#"><img src="payment/img/kotac.png" /></a></li>
                      </ul>
                      
                      </div>
                      <div class="bank-list">
                      <select>
                      <option>------Choose a Bank------</option>
                      <option>Axis Bank</option>
                       <option>HDFC Bank</option>
                        <option>ICICI Bank</option>
                         <option>State Bank of India</option>
                          <option>Allahabad Bank</option>
                           <option>Andhra Bank</option>
                            <option>Bank of Bahrain and Kuwait</option>
                       <option>Bank of Baroda - Corporate Banking</option>
                        <option>Bank of Baroda - Retail Banking</option>
                         <option>Bank of India</option>
                          <option>Bank of Maharashtra</option>
                           <option>Canara Bank</option>
                            <option>Catholic Syrian Bank</option>
                       <option>Central Bank of India</option>
                        <option>City Union Bank</option>
                         <option>Corporation Bank</option>
                          <option>Cosmos Bank</option>
                           <option>Dena Bank</option>
                            <option>Deutsche Bank</option>
                       <option>Development Credit Bank</option>
                        <option>Dhanlakshmi Bank</option>
                         <option>Federal Bank</option>
                          <option>IDBI Bank</option>
                           <option>ING Vysya Bank</option>
                            <option>Indian Bank</option>
                       <option>Indian Overseas Bank</option>
                        <option>IndusInd Bank</option>
                         <option>Jammu &amp; Kashmir Bank</option>
                          <option>Karnataka Bank Ltd</option>
                           <option>Karur Vysya Bank</option>
                              <option>Kotak Bank</option>
                        <option>Laxmi Vilas Bank - Corporate</option>
                         <option>Laxmi Vilas Bank - Retail</option>
                          <option>Oriental Bank of Commerce</option>
                           <option>Punjab &amp; Maharashtra Co-operative Bank</option>
                              <option>Punjab &amp; Sind Bank</option>
                        <option>Punjab National Bank - Corporate Banking</option>
                         <option>Punjab National Bank - Retail Banking</option>
                          <option>Ratnakar Bank</option>
                           <option>Saraswat Bank</option>
                           <option>Shamrao Vitthal Co-operative Bank</option>
                         <option>South Indian Bank</option>
                          <option>Standard Chartered Bank</option>
                           <option>State Bank of Bikaner &amp; Jaipur</option>
                           <option>State Bank of Hyderabad</option>
                         <option>State Bank of Mysore</option>
                          <option>State Bank of Patiala</option>
                           <option>State Bank of Travancore</option>
                            <option>Syndicate Bank</option>
                         <option>Tamil Nadu State Co-operative Bank</option>
                          <option>Tamilnad Mercantile Bank Ltd.</option>
                           <option>The Royal Bank of Scotland</option>
                            <option>Union Bank of India</option>
                         <option>United Bank of India</option>
                          <option>Vijaya Bank</option>
                           <option>Yes Bank Ltd</option>
                      </select>
                      </div>
                       <button type="button" class="step-btn">CONTINUE</button>
                        
					</div>
					<div>
                    <div class="payusingtext">
                    <p>Pay Using Credit Card</p>
                   <img src="payment/img/visa.png" />
                     <img src="payment/img/master.png" />
                      <img src="payment/img/amrican.png" />
                       <img src="payment/img/discover.png" />
                    
                    </div>
                    <div class="card-box">
                    <input type="text" placeholder="Card number" />
                    <div class="left-card">
                    <p> Expiry Date</p>
                    <input type="text" placeholder="mm / yy">
                    </div>
                    <div class="right-card">
                    <p> CW</p>
                    <input type="text" placeholder="CW">
                    </div>
                    <p>Name on Card</p>
                    <input type="text" placeholder="Name on Card" />
                    <button type="button" class="step-btn">save and pay</button>
                    <p>This Card will be securely saved for a faster payment experience CW number will not be saved. </p>
                    </div>
                    
					
					</div>
				</div>
			</div>
</form> -->
</div>
  </div>
</div>
<div class="col-md-5">
<div class="info-box panel panel-default panel-body">
 <h5 style="color:#3d464d; "><strong>What's included in the ILSO Preparation Zone?</strong></h5>
    <p><img src="img/right1.png" />&nbsp; LifeSkills Guide</p>
    <p><img src="img/right1.png" /> &nbsp; 200+ Questions Banks</p>
    <p><img src="img/right1.png" /> &nbsp; Real Life Practile Questions</p>
    <p><img src="img/right1.png" /> &nbsp; 5 Mock Tests</p>
 
</div>
<p style="font-size:18px;"><strong>Questions ?</strong> Email Us: info@iskillsolympiad.org</p>
</div>
        
<!--<div class="col-lg-3">
<h3 align="center">Payment Summary </h3>
<div class="info">
<h2>Teena Madan</h2>
<p>teena@gmail.com</p>
<p>Grade : 01</p>
<p>India</p>
<p><strong>You Paying Rs.500</strong></p>
</div>
</div>-->
</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>