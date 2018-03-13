<?php
session_start();
?>


<?php 
//require 'config.php';
include('include/constant.php');
if(!empty($_SESSION['name'])){
    
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
  
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   
   $response=mysqli_query($con,"select id,answer from questions where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysqli_error());
   
   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
   $name=$_SESSION['name'];  
   mysqli_query($con,"update users set score='$right_answer' where user_name='$name'");
?>
<!DOCTYPE html>
<html>
    <head>
<?php include('include/common.php'); ?>
      <title>World Skills Competition | International Olympiad | Life Skills Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="cssn/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="cssn/style.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!--<header>
            <p class="text-center">
                Welcome <?php 
                if(!empty($_SESSION['name'])){
                    echo $_SESSION['name'];
                }?>
               
            </p>
        </header>-->
        <?php include('header.php'); ?>
        <div class="container result">
            <div class="row"> 
                    <div class='result-logo'>
                            <img src="imagen/Quiz_result.png" class="img-responsive"/>
                    </div>    
           </div>  
           <hr>   
           <div class="row"> 
                  <div class="col-lg-6"> 
                  
                            <img src="imagen/result.jpg" class="img-responsive"/>
                   
                  </div>
                  
                  <div class="col-lg-6"> 
                       <div style="margin-top: 5%">
                        <a href="mockgrade.php" class='btn btn-success next'>Start new Quiz!!!</a>                   
                     <a href="logout.php" class='btn btn-success next'>Logout</a>
                        <h4>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></h4>
                        <h4>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></h4>
                        <h4>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></h4>                   
                       </div> 
                   
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery.validate.min.js"></script>

        

    </body>
</html>
<?php }else{
    
 header( 'Location: http://localhost/new_quiz/index.php' ) ;
      
}?>