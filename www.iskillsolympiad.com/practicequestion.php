<?php session_start();include('include/constant.php');include('header.php');?>
<?php if(empty($_SESSION['student_id'])){ header('Location: loginiso.php');} ?>
	  <div class="quiz_content">
		
			<div class="Quiz_center border">
			
         
			<h2>Practice Questions<span class=""><span></h2>
            
			<?php $sql="SELECT q.* FROM question as q where q.group_id=$_SESSION[group_id] ORDER BY RAND() ";
$res=mysqli_query($con,$sql);
$i=1;
while($row=mysqli_fetch_assoc($res)){ 
$class='false';
					  $text='False';
					  echo '
					  
					   <script> 
$(document).ready(function(){
  $("#sol_'.$row['id'].'").click(function(){
    $("#solutions_'.$row['id'].'").slideToggle("slow");
  });
});

$(document).ready(function () {
$("#showfield1_'.$row['id'].',#showfield2_'.$row['id'].',#showfield3_'.$row['id'].',#showfield4_'.$row['id'].'").click(function () {
   
    $("#sol_'.$row['id'].'").show("slow");
});

});  </script> 

 <span> '.$i++.' </span><p>.'.$row[question].'</p>
					<ul>
		<li><span><input type="radio" name="radio_9" id="#showfield1_'.$row['id'].'"></span>'.$row[optiona].'</li>
		<li><span><input type="radio" name="radio_9" id="#showfield2_'.$row['id'].'"></span> '.$row[optionb].'</li>
		<li><span><input type="radio" name="radio_9" id="#showfield3_'.$row['id'].'"></span> '.$row[optionc].'</li>
		<li><span><input type="radio" name="radio_9" id="#showfield4_'.$row['id'].'"></span> '.$row[optiond].'</li>
			<input type="submit" value="Solution"  id="sol_'.$row['id'].'">
				<div id="solutions_'.$row['id'].'" style="display:none;">
					 <div id="view_solutions" >
					  <h3>Explanation:</h3>
					   <ul>
	      <li><div ' ; if($row[answer]==1){ $class='true';}else{ $class='false';} echo 'class="'.$class.'">.</div>'.$row[optiona_exp].'</li>

	<li><div ' ; if($row[answer]==2){ $class='true'; }else{ $class='false';  } echo ' class="'.$class.'">.</div>'.$row[optionb_exp].'</li>
	<li><div ' ; if($row[answer]==3){ $class='true'; }else{ $class='false'; } echo ' class="'.$class.'">.</div>'.$row[optionc_exp].'</li>
	<li><div ' ; if($row[answer]==4){ $class='true'; }else{ $class='false'; } echo ' class="'.$class.'">.</div>'.$row[optiond_exp].' </li>		
					   </ul>
					  </div>
					</div>	
					</ul>';
					  }
					
					?>
             
					
            </div>
            
            <div>