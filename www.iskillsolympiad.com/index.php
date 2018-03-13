<script>
window.location.href='https://iskillsolympiad.org';
</script>
<!Doctype html>
<html lang="en">
<head>

<?php include('include/common.php');
    include('include/constant.php'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<link rel="shortcut icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<link rel="icon" href="new_img/favicon-32x32.png" type="image/x-icon">
<meta name="google-site-verification" content="K74241QajWHuH-VYgJ-bwP2EQPik1RUlDT4ZvkOlwtQ" />
<title>International Life Skills Olympiad | Life Skills Test</title>
<link href="new_css/cover.css" rel="stylesheet">
<script src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
    
<script>
	$(function(){
		$('.tab-section').hide();
		$('#tabs a').bind('click', function(e){
		$('#tabs a.current').removeClass('current');
		$('.tab-section:visible').hide();
		$(this.hash).show();
		$(this).addClass('current');
		e.preventDefault();
		}).filter(':first').click();
		});
	</script>
<script>
	$(function(){
		$('.tab-section_menu').hide();
		$('#tabs_menu a').bind('click', function(e){
		$('#tabs_menu a.current').removeClass('current');
		$('.tab-section_menu:visible').hide();
		$(this.hash).show();
		$(this).addClass('current');
		e.preventDefault();
		}).filter(':first').click();
		});
	</script>
<script>
	$(function(){
		$('.tab-section_second').hide();
		$('#tab_second a').bind('click', function(e)
		
		{
		$('#tab_second a').click(function(){
		$("#fifth").attr("tabindex","1");
		$('#fifth').focus();
          });
		$('#tab_second a.current').removeClass('current');
		$('.tab-section_second:visible').hide();
		$(this.hash).show();
		$(this).addClass('current');
		e.preventDefault();
		}).filter(':first').click();
		});
	</script>
<script type="text/javascript">
    /*  $(function() {
        var endDate = "March 1, 2015 15:03:25";
		

        $('.countdown.simple').countdown({ date: endDate });

        $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 3) + " <span>Days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>Hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>Min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>Sec</span></div>");
          }
        });

        $('.countdown.callback').countdown({
          date: +(new Date) + 10000,
          render: function(data) {
            $(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
          },
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        }).on("click", function() {
          $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
        });
      });*/
    </script>
<script type="text/javascript">
   setTimeout(function() {
    $('#logo').slideUp('slow');
}, 9000);
</script>
<style type="text/css">
div#DIV .hide {
	display: none !important;
	transition-delay: 900000s;
}
</style>
<script src="js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="new_css/jquery.bxslider.css" rel="stylesheet" />
<script>
   $(document).ready(function(){
  $('.bxslider').bxSlider({
  mode: 'fade',
  auto:true,
  captions: true
});
});

</script>
<script>
$(document).ready(function(){
    $(".close_popup").click(function(){
        $(".pop_up").remove();
    });
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="distribution" content="Global" />
<meta name="Keywords" content="international skills olympiad, skills olympiad test, life skills test, skills olympiad 2017, critical life skills curriculum, life skill education, life skills games, ILSO"/>
<meta name="description" content="Test your child's skills by enrolling them in online skills testing competition. You can resigter for this massive competition only on iskillsolympiad."/>


<!-- Facebook Conversion Code for Skillizen -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6020609240006', {'value':'0.01','currency':'INR'}]);
</script>
<noscript>
<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6020609240006&amp;cd[value]=0.01&amp;cd[currency]=INR&amp;noscript=1" />
</noscript>
<!--<style>
.regester-box{ margin:auto; text-align:center; display:inline-block; position:absolute; top:45%; left:40%;}
.regester-box a{ border-radius: 44px; color: #fff; font-size: 38px; padding: 6px 80px; background-color:#339933;}
.regester-box a:hover{ background-color: #006633; color: #fff;}
 </style> -->
</head>
<body>
<div id="logo"> </div>
<ul class="bxslider">
  <li>
    <div class="first">
      <div class="bg"><img src="img/21stcenturyskills.jpg"></div>
      <div class="home_logo"><img src="new_img/Web_logo1.png"></div>
      <!--<div class="regester-box"><a href="adminhome.php">Register Now</a></div> -->
      <div class="first_content">
        <h2>1 Billion children are in the race to lead the world. You can give your child a head start. </h2>
        </div>
      <div class="category" id="tab_second">
        <div class="circle_first"> <a href="#what" title="WHAT is International Life Skills Olympiad?"> <img src="img/What.png">
          <p>WHAT</p>
          </a> </div>
        <div class="circle_third"> <a href="#when" title="WHO can participate in the Life Skills Olympiad?"> <img src="img/Where.png">
          <p>WHO</p>
          </a> </div>
        <div class="circle_second"> <a href="#where" title="WHEN is the Life Skills Olympiad online test ?"> <img src="img/When.png">
          <p>WHEN</p>
          </a> </div>
        <div class="circle_fourth"> <a href="#how" title="WHY do we need a global Life Skills test for school kids?"> <img src="img/How.png">
          <p>WHY</p>
          </a> </div>
        <div class="circle_fifth"> <a href="#more" title="FAQs about International Life Skills Olympiad."> <img src="img/More.png">
          <p>FAQs</p>
          </a> </div>
      </div>
      <!--
  <div class="event_day">Time Remaining:</div>
 <div class="countdown styled"></div>--> 
      
    </div>
  </li>
  
  <!--<li>
<div class="first">
<div class="bg"><img src="img/1million.jpg"></div>
		<div class="home_logo"><img src="Web_logo1.png"></div>
		 <div class="opacity">
 <div class="first_content">
 <h2>Now Building 21st Century Skills is Child's Play! You can get your child into the game.
 </div>
  <div class="category" id="tab_second">
		<div class="circle_first">
		<a href="#what" title="WHAT is International Skills Olympiad?">
		<img src="img/What.png">

<p>WHAT</p></a>
</div>

<div class="circle_third">
<a href="#when" title="WHO can participate in the Skills Olympiad?">
<img src="img/Where.png">

<p>WHO</p>
</a>
</div>

<div class="circle_second">
<a href="#where" title="WHEN is the Skills Olympiad online test ?">
<img src="img/When.png">

<p>WHEN</p>
</a>
</div>




<div class="circle_fourth">
<a href="#how" title="WHY do we need a global skills Online test for school kids?">
<img src="img/How.png">
<p>WHY</p>
</a>
</div>
<div class="circle_fifth">
<a href="#more" title="FAQs about International Skills Olympiad.">
<img src="img/More.png">
<p>FAQs</p>
</a>
</div>
 
 </div>
 </div>

  
</div>  </li> -->
  
  <!--<li>
    <div class="first">
 <div class="bg"><img src="img/Harward.jpg"></div>
      <div class="home_logo"><img src="Web_logo1.png"></div>
      
      <div class="first_content">
      <h2>
        Next summer, World's most skilled kids will go on a free trip to Harvard. You can reserve a seat for your child. </h2>
       
<span class="red_color" id="tab_second"><a href="#more">Find out How >>></a></span></h2>

       
	 <?php 
	
	
	 if(($_SESSION['student_id']=='')){
	    echo ' <h3><a rel="paytrigger" href="#pay_now" id="pay">Register Yourself</a></h3>
     <div class="user_login"><span><a rel="modaltrigger" href="#loginmodal" id="modaltrigger">Sign-In</a></span>
			<span><a rel="Registertrigger" href="#registermodal"  id="Registertrigger">Sign-Up</a></span>';
	 }else{
	 
	 echo ' <div class="user_login"><span><a href="logout.php" >LOG OUT</a></span>';
	 }?>
	      
	</div>
        
      </div>
      <div class="category" id="tab_second">
        <div class="circle_first"> <a href="#what" title="WHAT is International Skills Olympiad?"> <img src="img/What.png">
          <p>WHAT</p>
          </a> </div>
        <div class="circle_third"> <a href="#when" title="WHO can participate in the Skills Olympiad?"> <img src="img/Where.png">
          <p>WHO</p>
          </a> </div>
        <div class="circle_second"> <a href="#where" title="WHEN is the Skills Olympiad online test ?"> <img src="img/When.png">
          <p>WHEN</p>
          </a> </div>
        <div class="circle_fourth"> <a href="#how" title="WHY do we need a global skills Online test for school kids?"> <img src="img/How.png">
          <p>WHY</p>
          </a> </div>
        <div class="circle_fifth"> <a href="#more" title="FAQs about International Skills Olympiad."> <img src="img/More.png">
          <p>FAQs</p>
          </a> </div>
      </div>
      
    
  <div class="event_day">Time Remaining:</div>
 <div class="countdown styled"></div>
      
    </div>
  </li> -->
  <li>
    <div class="first">
      <div class="bg"><img src="img/kidsplaying.jpg"></div>
      <div class="home_logo"><img src="new_img/Web_logo1.png"></div>
       
      <div class="first_content">
        <h2>
        Good grades are just not enough. Now you can test your Child's Skills to Manage & Lead. </h2>
        <!--
<span class="red_color" id="tab_second"><a href="#more">Find out How >>></a></span></h2>
--> 
        <!--
	 <?php 
	
	
	 if(($_SESSION['student_id']=='')){
	    echo ' <h3><a rel="paytrigger" href="#pay_now" id="pay">Register Yourself</a></h3>
     <div class="user_login"><span><a rel="modaltrigger" href="#loginmodal" id="modaltrigger">Sign-In</a></span>
			<span><a rel="Registertrigger" href="#registermodal"  id="Registertrigger">Sign-Up</a></span>';
	 }else{
	 
	 echo ' <div class="user_login"><span><a href="logout.php" >LOG OUT</a></span>';
	 }?>
	      
	</div>--> 
        
      </div>
      <div class="category" id="tab_second">
        <div class="circle_first"> <a href="#what" title="WHAT is International Skills Olympiad?"> <img src="img/What.png">
          <p>WHAT</p>
          </a> </div>
        <div class="circle_third"> <a href="#when" title="WHO can participate in the Skills Olympiad?"> <img src="img/Where.png">
          <p>WHO</p>
          </a> </div>
        <div class="circle_second"> <a href="#where" title="WHEN is the Skills Olympiad test ?"> <img src="img/When.png">
          <p>WHEN</p>
          </a> </div>
        <div class="circle_fourth"> <a href="#how" title="WHY do we need a global skills Online test for school kids?"> <img src="img/How.png">
          <p>WHY</p>
          </a> </div>
        <div class="circle_fifth"> <a href="#more" title="FAQs about International Skills Olympiad."> <img src="img/More.png">
          <p>FAQs</p>
          </a> </div>
      </div>
      <!--
  <div class="event_day">Time Remaining:</div>
 <div class="countdown styled"></div>--> 
    </div>
  </li>
</ul>

<!--
 <div class="second">
<div class="circle_first">
<a href="#fifth"><img src="img/What.png"></a>

<p><a href="#fifth">What</a></p>
</div>
<div class="circle_second">
<a href="#fifth"><img src="img/When.png"></a>

<p><a href="#fifth">When</a></p>
</div>

<div class="circle_third">
<a href="#fifth"><img src="img/Where.png"></a>

<p><a href="#fifth">Where</a></p>
</div>

 


<div class="circle_fourth">
<a href="#fifth"><img src="img/How.png"></a>
<p><a href="#fifth">How</a></p>
</div>
<div class="circle_fifth">
<a href="#fifth"><img src="img/More.png"></a>
<p><a href="#fifth">FAQs</a></p>
</div>
<div class="second_content">
 <h2>Building Skills is Child's Play</br>Check your Skills Now!!</h2>
 <h2>Building Skills is Child's Play</br>Check your Skills Now!!</h2>
 
			 <?php 
	
	
	 if(($_SESSION['student_id']=='')){
	    echo '<h3><a rel="paytrigger" href="#pay_now" id="pay">Register Yourself</a></h3>
     <div class="user_login"> <span><a rel="modaltrigger" href="#loginmodal" id="modaltrigger">Sign-In</a></span>
			<span><a rel="Registertrigger" href="#registermodal" id="Registertrigger">Sign-Up</a></span>';
	 }else{
	 
	 echo '<div class="user_login"> <span><a href="logout.php" >LOG OUT</a></span>';
	 }?>
	</div>
 
 <h2></h2>
</div>


 
 -->

<div id="fifth">
  <div class="container">
    <!--<ul id="tab_second">
      <li>
        <div class="circle home_first"><a href="#what"><img src="img/What.png"></a></div>
        <a href="#what">WHAT</a></li>
      <li>
        <div class="circle home_fifth"><a href="#when"><img src="img/Where.png"></a></div>
        <a href="#when">WHO</a></li>
      <li>
        <div class="circle home_second"><a href="#where"><img src="img/When.png"></a></div>
        <a href="#where">WHEN</a></li>
      <li>
        <div class="circle home_fourth"><a href="#how"><img src="img/How.png"></a></div>
        <a href="#howy">WHY</a></li>
      <li>
        <div class="circle home_third"><a href="#more"><img src="img/More.png"></a></div>
        <a href="#more">FAQs</a></li>
    </ul>-->
    <div id="what" class="tab-section_second ">
      <div class="active"></div>
      <h2>What is International Life Skills Olympiad</h2>
      <p>International Life Skills Olympiad is the world's 1st Life Skills test, conducted every year for students in Grade IV to Grade XII. The first edition of the great event was held on 17th December, 2015. On the whole, the students have to undergo a different test to prove their intelligence and compete with the fellow competitors.</p>
      <p>The vision of International Life Skills Olympiad is to create the world's 1st common platform for calibrating life skills proficiency and to develop a wide range of 21st-century critical life skills among 1 Billion young citizens.</p>
      <p>The International Life Skills Olympiad is designed by a global team of highly experienced educationists, psychologists and Life Skills experts aimed to assess the skills proficiency levels of young citizens in the 21st century Life Skills.</p>
      <!--<div class="g">
        <ul>
          <li><b>Leadership</b></li>
          <li><b>Ethics</b></li>
          <li><b>Teamwork</b></li>
          <li><b>Collaboration</b></li>
          <li><b>Critical Thinking</b></li>
          <li><b>Decision Making</b></li>
          <li><b>Economics Common Sense - I</b></li>
          <li><b>Economics Common Sense - II</b></li>
          <li><b>Effective Communication</b></li>
          <li><b>Empathy and Compassion</b></li>
          <li><b>Entrepreneurship</b></li>
          <li><b>Environment and Sustainability</b></li>
        </ul>
      </div> 
      <div class="g">
        <ul>
          <li><strong>Flexibility and Adaptability</strong></li>
          <li><strong>Global Citizenship</strong></li>
          <li><strong>Goal Setting</strong></li>
          <li><strong>Leading Self</strong></li>
          <li><strong>Negotiation</strong></li>
          <li><strong>Personal Branding</strong></li>
          <li><strong>Personal Finance Sense</strong></li>
          <li><strong>Planning and Organizing</strong></li>
          <li><strong>Presentation</strong></li>
          <li><strong>Research and Analysis</strong></li>
          <li><strong>Social Media</strong></li>
          <li><strong>Values and Ethics</strong></li>
          <li><strong>Virtual Productivity</strong></li>
        </ul>
      </div>-->
    </div>
    <div id="when" class="tab-section_second green">
      <!--<div class="active1"></div> -->
      <div class="about">
        <h2>Who Can Participate in International Life Skills Olympiad ?</h2>
        <p> Any student from class IV to XII can participate in the International Life Skills Olympiad. The Olympiad exam will be conducted online across the world. All the registered students having a basic computer with internet facilities can participate in the Life Skills Olympiad comfortably from their home or their school.

</p>
        <br />
        <ul>
          <li><b>Group I:</b> Grade IV to V</li>
          <br />
        
          <li><b>Group II:</b> Grade VI to VII</li>
          <br />
          <li><b>Group III:</b> Grade VIII to X</li>
          <br />
        <li><b>Group IV:</b> Grade XI to XII</li>
            <br/>  
          <br />
        </ul>
      </div>
    </div>
    <div id="where" class="tab-section_second blue1">
      <!--<div class="active2"></div> -->
      <div class="where">
        <h2>When</h2>
        <h3>The important dates related to Life Skills Olympiad  are as follows-</h3><br>
        <h3>Enrollment starts from 5th October 2017.</h3><br>
        <div style="width:50%; float:left;">
        <h3>Date of Olympiad Exam</h3><br>
        <ul>
          <li><strong> 21th January, 2018 </strong></li>
        </ul>
        </div>
        <div style="width:50%; float:left;">
        <h3>Last date of Enrollment</h3><br>
        <ul>
           <li> <strong> 7th January, 2018 </strong></li><br>          
        </ul>
        </div>
       <h3>Result announcements Date- 10th Feburary, 2018</h3>
        
        <!-- <p>*The Enrollment fee is free up till<b>20<sup>th</sup> July 2015.</b></p>
<p>**Candidate has to pay registration fee of $2.99 from <b>20<sup>th</sup>July 2015</b> to <b>15<sup>th</sup> March 2015.</b></p>
 <p>***The mode of paying the fee is online only.</p>--> 
      </div>
    </div>
    <div id="how" class="tab-section_second blue">
      <!--<div class="active3"></div> -->
      <div class="how">
        <h2>Why do we need a global life skills test for school kids?</h2>
        <p>We all agree that our children, the young citizens of 21st century need a whole range of critical Life skills to engage, manage and lead their world. Most of the prevalent schooling curriculum across the world are primarily fact-based curriculum that do not provide any scope for young minds to acquire practical Life skills.
</p>
        <p>Research has conclusively proven that human brain can acquire practical life skills only during the hardwiring stage of the brain i.e, roughly between the ages of 6-16 years. And the first building block of acquiring Life Skills is to assess the current ‘Life Skills Quotient’ of the young minds. That is the precise reason why every school going child, across the world, from grade IV-XII should participate in International Life Skills Olympiad and get started on the path of Skilling for the 21 st century. "
                    
</p>
       
       
      </div>
    </div>
    <div id="more" class="tab-section_second yellow">
      <!--<div class="active4"></div> -->
      <div class="more"> 
        
        <!-- <ul id="tabs_menu">
	 
		<li><a href="#more">FAQs</a></li>|
		<li><a href="#Syllabus">Syllabus</a></li>|
		<li><a href="#SampleQuestions">Sample Questions</a></li>|
		<li><a href="#HangoutZone">Hangout Zone</a></li>|
		<li><a href="#LatestUpdates-">Latest Updates</a></li>|
		<li><a href="#ResourcePad">Resource Pad</a></li>
	 </ul>
<div id="more" class="tab-section_menu"> -->
        
        <h2>FAQs</h2>
        <h3>Q1: What is International Life Skills Olympiad?</h3>
        <p>The International Life Skills Olympiad is the world's 1st examination on Life Skills for school students in Grade IV to XII. This global test is designed to test the skill levels of the young minds and also to educate & sensitize them to a wide range of practical Life Skills. One of its kind in the world, the Life Skills Olympiad tests the students on Life Skills like leadership, ethics, goal planning, economics, and several other 21st century Skills.</p>
        <h3>Q2: Am I eligible to participate in the International Life Skills Olympiad?</h3>
        <p>The exam is open to school students worldwide from Grade IV to Grade XII. The exam will be conducted online. The test will be held for 4 different 
          <strong>Grade Groups - </strong>         
        <ul>
          <li> Group 1 - [Grade IV-V]</li>
          <li> Group 2 - [Grade VI-VII]</li>
          <li> Group 3 - [Grade VIII-IX-X]</li>
          <li> Group 4 - [Grade XI-XII]</li>
        </ul>
        </p>
        <h3>Q3. Do I have to enroll for the test through my school?</h3>
        <p>No, you don't have to enroll through your school strictly. Interested participants can register online on the website of International Life Skills Olympiad 2017-18.</p>
        <h3>Q4: I am from non-English medium school, can I appear in International Life Skills Olympiad?</h3>
        <p>The exam is conducted in English only. It is not a test of language skills hence anybody who can understand basic English should be able to participate and succeed in the International Skills Olympiad.</p>
        <h3>Q5: When is the examination held?</h3>
        <p>The International Life Skills Olympiad 2017-18 will be held on <strong>21st January 2018</strong> across the world. The choice is open to participants. They can attempt exam as per their convenience. </p>
        <h3>Q6: What is the procedure for the enrollment?</h3>
        <p>You can enroll online through our website or you can email us your formalities at info@iskillsolympiad.org
</p>
        <h3>Q7: How do I prepare for the International Skills Olympiad?</h3>
        <p>On the iSkills Olympiad website, you'll find syllabus and Skills Guide(study materials) required for the Olympiad. You will also find mock tests for your group. Besides that, participants can buy question banks, workbooks, and other reference skill books to acquire new skills and to practice them.</p>
        <h3>Q8: Are there any awards for winners?</h3>
        <p>Yes! There will be great prizes for the global winners of all the 4 groups. And whats more, all participants accross the world will be recieving certificates and prizes worth $10.00</p>
        <h3>Q9: How will I know my result?</h3>
        <p>The results will be posted on the International Skills Olympiad website and you will also receive your result through email.</p>
        
      </div>
      <div id="Syllabus" class="tab-section_menu"> </div>
    </div>
  </div>
</div>

<!--
 <div class="right_tab">
  <ul>
	<li><a href="#">FAQ</a></li>
	<li><a href="#">News and Events</a></li>
	<li><a href=##">Live Chat</a></li>
	<li><a href="#">To Subscribe</a></li>
	<li><a href="#">Download Brochure</a></li>
	<li><a href="#">Free Resources</a></li>
	 
  
  </ul>
 
 </div>
 -->

</div>
<!--<div class="third">
  <div class="container">
    <ul id="tabs">
      <li>
        <div class="circle home_first"><a href="#Home"><img src="img/Home.png"></a></div>
        <a href="#Home">Home</a></li>
      <li>
        <div class="circle home_second"><a href="#About"><img src="img/About.png"></a></div>
        <a href="#About">About us</a></li>
      <li>
        <div class="circle home_third"><a href="#Olympiad"><img src="img/Olympiad.png"></a></div>
        <a href="#Olympiad">Skills Games</a></li>
      <li>
        <div class="circle home_fourth"><a href="#Sponsors"><img src="img/Sponsor.png"></a></div>
        <a href="#Sponsors">Skills Courses</a></li>
      <li>
        <div class="circle home_fifth"><a href="#Involved"><img src="img/get involved.png"></a></div>
        <a href="#Involved">Skills Books</a></li>
      <li>
        <div class="circle home_sixth"><a href="#Contact"><img src="img/Contact.png"></a></div>
        <a href="#Contact">Contact Us</a></li>
    </ul>
    <div id="Home" class="tab-section red">
      <div class="a"></div>
      <h2>Welcome</h2>
      <p> Welcome to the <b>International Skills Olympiad</b> for  IV<sup>th</sup> to XII<sup>th</sup> standard students. We are excited about your interests and&nbsp;participation in this great event to promote life skills curriculum for students, teachers, and parents. The International Skills Olympiad is an initiative taken by <b>Skillizen Learning Global Pte. Ltd.</b>, that seeks  to transform important life skills like: decision making Skill, critical thinking, teamwork, and problem solving skills of the world at large. We aim to address this need in a self-enabling manner by building and administering "The world's 1st Life Skills Curriculum for the 8-18 year young citizens of the 21st century".</p>
      <p> We Plan to host International Skills Olympiad  for students to demonstrate their leadership, decision 
        making and other important life skills. It is a tournament getting participation from different 
        countries across the globe, where participants will have the opportunity to learn important life skills 
        through different resources and apply the learning during the test. You will be part of a global 
        community who will be taking test from every corner of the world. We look forward to your 
        attendance and participation in the International Skills Olympiad, and please visit the adjacent links 
        to learn more about the event. See you on <b>December 17th, 2015</b> and let's have a great tournament.</p>
      <p> <strong>Mr. Sidharth Tripathy</strong><br/>
        <strong>Chief Executive Officer</strong><br/>
        <strong>Skillizen Learning Global Pte. Ltd.</strong><br/>
      </p>
    </div>
    <div id="About" class="tab-section blue1">
      <div class="a1"></div>
      <h2>About Us</h2>
      <p> The International Skills Olympiad is the world's first Life skills test for school children and it will be held annually. It is an initiative of <b>Skillizen Learning Global Pte. Ltd.</b>, an innovative educational social venture that was conceived at Harvard University during 2011. </p>
      <h2>The Genesis of Skillizen</h2>
      <p>The founder of Skillizen, was inspired to establish this venture in the summer of 2011, based on his research findings during a Master's level research paper on educational innovation at 
        Harvard University. His research suggested that human brain is able to most effectively acquire critical skills during human brains hardwiring period which is roughly between the age of 6-16 
        years. Upon further research it was clear that most of the prevalent school curriculums across the world are primarily fact-based curriculums that do not enable the students to acquire any 
        practical Life skills. Even more shocking was the fact that schools worldwide were following curriculums that are nothing but rehashed versions of 16th century curriculum used in European Schools.</p>
      <p>Hence the founder felt that the only way to transform the decision-making DNA of mankind is by administering the right skills at the right age. That led to the creation of Skillizen with a gigantic mission to create comprehensive, evidence backed and criterion referenced Life Skills Curriculum for 6-16 year young school children.</p>
      <h2>The Pedagogy</h2>
      <p>The Skillizen curriculum uses a unique pedagogy, wherein interactive lessons, video based case stories and simulative computer games are used to inculcate Life skills in the young minds. And an integral component of this curriculum is International Skills Olympiad that helps with testing of critical Life skills using real world scenario based questions.</p>
      <h2>The Impact</h2>
      <p>Skillizen's global initiative has the potential to impact about 1 billion young citizens and help them build, manage and influence their personal lives, social roles and global citizenship 
        through better decision- making and problem solving. The committed global team at Skillizen strongly believes that it will herald a new world by transforming each one of 1 Billion young 
        citizens of our world into a "Skillizen-i.e.; a Citizen with the right Skills."</p>
    </div>
    <div id="Olympiad" class="tab-section yellow">
      <div class="a2"></div>
      <h2>Games</h2>
      <p> <br>
        Welcome!<br/>
        Here you can play games and learn new and exciting skills as well. Do you know how?<br/>
        Skillizen learning games are a unique blend of world class gaming experience and best in class learning for young kids.<br/>
        Here you can get a whole range of useful skills while playing games and in each game while moving across levels, in a fun, entertaining and engaging way. All the games that you see and play have skills transfer in built in their game design. For example, if you choose to play Detective Grandma, you learn about Social Media behaviors, what to do and what not to do - How to best use social media and how to avoid rumors and so on.
        Play On & Skill Up ! <a href="https://www.skillizen.com/Games" target="_blank">.....MORE</a></p>
    </div>
    <div id="Contact" class="tab-section pink">
      <div class="a5"></div>
      <section>
        <h2>Contact Us: </h2>
        <h3>International Skills Olympiad Secretariat</h3>
        <h4>C/o Skillizen Learning Global Pte. Ltd.</h4>
        16 Raffles Quay<br>
        #41-01 Hong Leong Building</br>
        Singapore 048581<br>
        <strong>Phone:</strong> +65 - 64230777<br>
        <strong>Email:</strong> info@skillizen.com
        </p>
      </section>
      <section>
        <div class="contact_left">
          <form id="contact_form" name="contact_form" method="">
            <ul>
              <li id="contact_error"></li>
              <li><span>Name:*</span></li>
              <li>
                <input type="text" name="contact_name" id="contact_name" required>
              </li>
              <li><span>E-mail Address:*</span></li>
              <li>
                <input type="email" name="contact_email" id="contact_email" required>
              </li>
              <li><span>Phone No:*</span></li>
              <li>
                <input type="text" pattern="[7-9]{1}[0-9]{9}" name="contact_phone" id="contact_phone" required>
              </li>
              <span>Comment:*</span>
              <li>
                <textarea rows="4" cols="39" name="conatct_comment" id="conatct_comment"  required></textarea>
              </li>
              <li>
                <input type="submit" value="Submit">
              </li>
            </ul>
          </form>
        </div>
      </section>
    </div>
    <div id="Sponsors" class="tab-section blue">
      <div class="a6"></div>
      <h2>Our Curriculum</h2>
      <p> Skillizen is refreshingly different in many ways. It is unlike some of the previous 
        initiatives in the direction of imparting quality education to your kids. Our approach
        is fundamentally different and here's how. We have taken a fundamental step by creating
        an evidence based curriculum, which will ensure that the school children's minds are trained 
        to absorb knowledge, acquire critical life skills and to develop a Life attitude. Skillizen
        will be offering its products to help students across the globe develop <strong>Life Skills</strong> and
        winning mind-set. The Curriculum Framework aims at achieving the individual competencies that are
        essential for Global citizens of 21st Century.<br>
        <br>
        You can find more information about our life skills course, life skills curriculum - <a href="https://www.skillizen.com/Courses"  target="_blank">.....MORE</a> </p>
    </div>
    <div id="Involved" class="tab-section green">
      <div class="a4"></div>
      <h2> Life Skills Books</h2>
      <p> <strong> Welcome! </strong><br>
        Do you know, a book can open a whole new world for you in which you can find your own identity? You can surprise everyone around you with your awareness and practice of life skills.<br>
        <br>
        Please take a look at one of the biggest and most interesting library of life skill e-books. These e-books are unique as they are written in a storytelling format, even though they contain so much more than just the story.<br>
        <br>
        Below link you can visit our life skill e-books and related information - <br>
        Read On & Skill Up !<a href="https://www.skillizen.com/Books" target="_blank">.....MORE</a> </p>
    </div>
  </div>
</div>-->
<div class="f_full">
  <div id="footer" style="clear:both;">
    <section>
      <ul>
       
        <li><a href="https://www.skillizen.com/about.php" target="_blank">About Us</a></li>
          <li><a href="#" data-toggle="modal" data-target="#contact">Contact Us</a></li>       
        <!--li><a href="https://www.skillizen.com" target="_blank">Contact Us</a></li -->
        <li><a href="https://www.skillizen.com/privacy-policy.php" target="_blank">Privacy Policy</a></li>
        <li><a href="http://skillizen.com/blog/" target="_blank">Blog</a></li>
      </ul>
    </section>
    <section>
      <h3>Join the Conversation</h3>
      <ul>
        <li><a href="https://www.facebook.com/InternationalSkillsOlympiad" target="_blank" class="social-link external-link">Facebook</a></li>
        <li><a href="https://twitter.com/Skillizen" target="_blank"  class="social-link twitter external-link">Twitter</a></li>
        <li><a href="https://plus.google.com/+SkillizenOrg" target="_blank" class="social-link google external-link">Google+</a></li>
        <li><a href="http://www.pinterest.com/SkillizenGlobal" target="_blank" class="social-link pinterest external-link">Pinterest</a></li>
      </ul>
    </section>
  </div>
</div>

<!--
<div class="footer">
<div class="info">
<h2>Skillizen Learning Solutions Pvt. Ltd.</h2>
<p>An education driven organization which is established based on an idea conceived at Harvard Business School</p>
</div>
<div class="footer_menu">
<ul>
<h3>COMPANY</h3>
<li><a href="javascript:void(0)">About</a></li>
<li><a href="javascript:void(0)">People</a></li>
<li><a href="javascript:void(0)">Leadership</a></li>
<li><a href="javascript:void(0)">Careers</a></li>
</ul>
<ul>
<h3>FRIENDS</h3>
<li><a href="javascript:void(0)">Partners</a></li>
<li><a href="javascript:void(0)">Community</a></li>
<li><a href="javascript:void(0)">Programs</a></li>
<li><a href="javascript:void(0)">Developers</a></li>
<li><a href="javascript:void(0)">Translate</a></li>
</ul>

<ul>
<h3>CONNECT</h3>
<li><a href="https://plus.google.com/+SkillizenOrg" target="_blank">Google</a></li>
<li><a href="https://twitter.com/sidharth_trip" target="_blank">Twitter</a></li>
<li><a href="https://www.facebook.com/SkillizenLearningSolutionsPvtLtd" target="_blank">Facebook</a></li>
<li><a href="https://skillizen.com/blog/" target="_blank">Blog</a></li>
<li><a href="#">Tech Blog</a></li>
</ul>


<ul>
<h3>MORE</h3>
<li><a href="javascript:void(0)">Terms</a></li>
<li><a href="javascript:void(0)">Privacy</a></li>
<li><a href="javascript:void(0)">Help</a></li>
<li><a href="javascript:void(0)">Press</a></li>
<li><a href="javascript:void(0)">Contact</a></li>
</ul>

</div>


</div>
 -->
<?php error_reporting(0); ?>
<?php /*?><div class="nav">
 <ul>
	
	
	<?php error_reporting(0);
	 session_start();
	 include_once("include/function.php");
    
	global $mysqli;
	
	 if($_SESSION['student_id']=='')
	 {
	    echo '
		<li><a rel="modaltrigger" href="#loginmodal" id="modaltrigger">SYLLABUS</a></li>|
		<li><a rel="modaltrigger" href="#loginmodal" id="modaltrigger">PRACTICE QUESTIONS</a></li>';
	
	 }else{
	
	  $profile_sql=$mysqli->query("select * from register where id=".$_SESSION['student_id']); 
	  $profile_fetch_sql=$profile_sql->fetch_assoc();
	  
	  echo '<li><a  href="download_pdf.php?aid='.$profile_fetch_sql[grade].'" >SYLLABUS</a></li>|';
			 
	  $age_sql=$mysqli->query("SELECT t.* FROM  age a  inner join testname as t on a.id=t.age inner join question as q on q.testname=t.id WHERE  ".$profile_fetch_sql[grade]." BETWEEN a.`age_1` AND a.`age_2` group by t.id limit 0,1");
              $age_fetch_sql=$age_sql->fetch_assoc();
	
	if($age_sql->num_rows>0)
	  {
	 	     echo '
			 <li><a href="test.php?sid='.$age_fetch_sql[id].'">SAMPLE PAPER</a></li>|';
	  }
	}
	?>
	
	<li><a href="#">RESOURCES</a></li>|
	<li><a href="#">HANGOUT ZONE</a></li>|
	<li><a href="#">LATEST UPDATE</a></li>
	
    </ul>
 
 
 </div><?php */?>
<?php ?>
<div class="login_user">
<span><a href="pdf/LifeSkillsOlympiad.pdf" target="_blank"><i>e-brochure</i></a></span>
  <?php 
	
	 if(($_SESSION['student_id']=='')){
			echo'<span><a href="loginiso.php">Login</a></span>';
echo'<span><a href="registeriso.php">Register Now</a></span>';}
			else{
	   echo '<span><a href="profile.php" >';
	   
	   if($_SESSION['student_name']!=''){ echo 'Welcome '. $_SESSION['student_name'];}else{  echo 'Welcome Guest';}
	   echo'</a></span>';
	 echo '<span>
	 <a href="logout.php" >LOG OUT</a></span>';
	 }?>
</div>
<?php /*?> <div class="exam_date"><p>  Worldwide<br/> Test Date <br/>17th December 2015</p></div><?php */?>
<div id="loginmodal" style="display:none;">
  <div class="hidemodal"><img src="img/icon_close.png"></div>
  <h1>Log-In</h1>
  <span id="result"></span>
  <div id="forgetmodel" style="display:none;">
    <form id="forgetfrm" name="forgetfrm" method="post" >
      <label for="username">E-Mail Id:</label>
      <input type="email" name="femail" id="femail" placeholder="E-mail..."  class="txtfield" tabindex="1" required onkeyup="javascript:document.getElementById('result').innerHTML='';">
      <div class="center">
        <input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu " value="SUBMIT" tabindex="3">
        <input type="button" id="loginbck" class="flatbtn-blu " value="LOGIN BACK" tabindex="3">
      </div>
    </form>
  </div>
  <div id="floginmodel" >
    <form id="loginform" name="loginform" method="post" >
      <label for="username">E-Mail Id:</label>
      <input type="email" name="email" id="email" placeholder="E-mail..."  class="txtfield" tabindex="1" 
	  required onkeyup="javascript:document.getElementById('result').innerHTML='';">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Password..." class="txtfield" tabindex="2" required>
      <div class="center">
        <input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu " value="Log In" tabindex="3">
        <input type="button" id="forget" class="flatbtn-blu " value="Forget Password" tabindex="3">
      </div>
    </form>
  </div>
</div>
<div id="registermodal" style="display:none;">
  <div class="hidemodal"><img src="img/icon_close.png"></div>
  <h1>Enroll Now </h1>
  <form id="registerform" name="registerform" method="post" action="action.php?action=register">
    <label for="username" class="mail">E-Mail Id:</label>
    <span id="error_email"></span>
    <input type="email"  name="email" id="email_regis" class="txtfield" tabindex="1" required
	   onchange="return check_regis(this.value,'1');" placeholder="Email-Id" onkeyup="javascript:document.getElementById('error_email').innerHTML='';" >
    <label for="username">Contact Number:</label>
    <input type="text" minlength="8" maxlength="15" placeholder="Number having length 10 to 15"   id="phone" name="phone" class="txtfield" tabindex="1" required pattern="[0-9]{10,15}">
    <div class="drop">
      <label for="username">Class:</label>
      <select class="age_group group" name="grade" required>
        <option value="">Select</option>
        <?php 
  $i=4;
	
  
		    while($i<=12)
			{
			
			echo ' <option value="'.$i.'">'.$i.'</option>';
			
			$i++;
			}
		?>
      </select>
    </div>
    <div class="drop">
      <label for="username">Registered by</label>
      <select class="age_group group" name="registered" required>
        <option value="">Select</option>
        <option value="1">Self</option>
        <option value="2">Parent</option>
      </select>
    </div>
    <label for="password">Password:</label>
    <input type="password" name="password"  id="regispassword" class="txtfield" pattern=".{6,15}" required title="6 to 15 characters" tabindex="2" 
	  onkeyup="validatePassword(this,document.getElementById('repassword'));"	required >
    <label for="password">Confirm Password:</label>
    <input type="password" name="repassword" id="repassword"  class="txtfield" pattern=".{6,15}" required title="6 to 15 characters" tabindex="2"  
        onkeyup="validatePassword(
         document.getElementById('regispassword'), this);">
    <div class="center">
      <input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu" value="Register" tabindex="3">
    </div>
  </form>
</div>

<!-- enrollment form-->

<div id="pay_now" style="display:none;">
  <div class="hidemodal"><img src="img/icon_close.png"></div>
  <h1>Enroll Now </h1>
  <?php  if($_SESSION['student_id']){$profile_sql=$mysqli->query("select * from register where id=".$_SESSION['student_id']); 
	       $profile_fetch_sql=$profile_sql->fetch_assoc();}
	?>
  <form id="payform" name="payform" method="post" action="action.php?action=enroll">
    <label for="username"  class="mail">E-Mail Id:</label>
    <span id="perror_email"></span>
    <input type="email"  name="email" placeholder="Email-Id" value="<?php echo $profile_fetch_sql['email'];?>"  id="pemail_regis" class="txtfield" tabindex="1" onchange="return check_regis(this.value,'1');" onkeyup="javascript:document.getElementById('perror_email').innerHTML='';" required>
    <label for="username">Name:</label>
    <input type="text" value="<?php echo  $_SESSION['student_name'];?>"  name="name" id="name" placeholder="Only Alphabets" class="txtfield" tabindex="1" pattern="[a-zA-Z\s]+" required>
    <label for="username">Grade:</label>
    <select class="age_group" name="age_group" required>
      <option value="">Select</option>
      <?php 
  $i=4;
	
  
		    while($i<=12)
			{
			if($profile_fetch_sql['grade']==$i){
			echo ' <option value="'.$i.'" selected>'.$i.'</option>';
			}else{
			echo ' <option value="'.$i.'">'.$i.'</option>';
			}
			$i++;
			}
		?>
    </select>
    <?php if($_SESSION['student_id']==''){ ?>
    <label for="password">Password:</label>
    <input type="password" name="password"  id="ppassword" class="txtfield" tabindex="2" pattern=".{6,15}" required title="6 to 15 characters"
onkeyup="validatePassword(this,document.getElementById('enrepassword'));"	  required>
    <label for="password">Confirm Password:</label>
    <input type="password" name="enrepassword" id="enrepassword"  class="txtfield" tabindex="2" pattern=".{6,15}" required title="6 to 15 characters" 
	 onkeyup="validatePassword(document.getElementById('ppassword'), this);">
    <?php } ?>
    <div class="center">
      <input type="submit" name="paybtn" id="paybtn" class="flatbtn-blu" value="Enroll" tabindex="3">
    </div>
  </form>
</div>
<section id="s3ShareIt">
  <div id="a"> <a target="_blank" title="Share on Facebook" href="https://www.facebook.com/SkillizenLearningSolutionsPvtLtd" target="_blank" ><img alt="twitter" src="img/facebook.png"></a> </div>
  <div id="a"> <a target="_blank" title="Twitter it !" href="https://twitter.com/sidharth_trip"><img alt="twitter" src="img/twitter.png"></a> </div>
  <div id="a"> <a target="_blank" title="google Plus" href="https://plus.google.com/+SkillizenOrg/posts" target="_blank"><img alt="Google Plus" src="img/google.png"></a> </div>
  <div id="a"> <a target="_blank" title="Blog" href="https://skillizen.com/blog" target="_blank"><img alt="blog" src="img/blog.png"></a> </div>
</section>

<!--<?php 

$var='<div class="pop_up"><div class="close_popup"><img src="img/cancel.png"></div><a href="#pay_now" id="pay"><img src="img/iskill_hm_pop.png"></a></div>';
   
		   
			 
	 if(($_SESSION['student_id']=='')){  echo $var; } 
	 else if($_SESSION['student_id']!=''){

          $already_pay=$mysqli->query("select * from payment where user_id=".$_SESSION['student_id']);
		  $num=$already_pay->num_rows;
		   if($num>0){
		    $select_result=$already_pay->fetch_assoc();
			if($select_result['status']=='0')
			 { echo $var;}
			 } else{ echo $var;}
		  }

			
?>  --> 

<script type="text/javascript">
 /*
window.onload = function () {
    document.getElementById("regispassword").onchange = validatePassword;
    document.getElementById("repassword").onchange = validatePassword;
}*/
function validatePassword(P1,P2){
if (P1.value != P2.value || P1.value == "" || P2.value == "")
  {
    P2.setCustomValidity("The Password Is Incorrect");
  }
  else
  {
   P2.setCustomValidity("");
  }
//empty string means no validation error
}
</script> 
<script type="text/javascript">

$(function(){
 $(".hidemodal,a[rel*=modaltrigger],a[rel*=Registertrigger],a[rel*=paytrigger]").click(function() {
  $("label.error").hide();
  $(".error").removeClass("error");
   $("#floginmodel").show();
   $("#forgetmodel").hide();
  $("#error_email").html(''); 
  $("#result").html(''); 
   $("#loginform")[0].reset();
  $("#registerform")[0].reset();
  $("#forgetfrm")[0].reset();
   
   
});

    
   $("#loginbck").click(function () {
     
        $("#floginmodel").show();
        $("#forgetmodel").hide();
       
        return false;
    });
  
   $("#forget").click(function () {
     
        $("#floginmodel").hide();
        $("#forgetmodel").show();
       
        return false;
    });
	
	
        $("#forgetfrm").submit(function (ev) {
		
	
            var values = $('form#forgetfrm').serialize();
	  
	    $.ajax({
	
        url: "ajax.php?action=forget&row_id=2",
        type: "post",
        data: values,
        success: function(data){
		data = $.parseJSON(data);
	
		
		  $("#result").html(data.returned_val); 
		 
		 $("#forgetfrm")[0].reset();
			
        },
                  error:function(){
          
                      $("#result").html('There is error while submit');
                   }
              });
			  ev.preventDefault();
             
         });
  
 
 


 
    $('#loginform').submit(function (ev) {
	   var values = $('form#loginform').serialize();
        $.ajax({
           url: "action.php?action=login",
        type: "post",
        data: values,
        success: function(data){ 
		
		data = $.parseJSON(data);
	
	    
		 if(data.msg=='profile.php'){ 
		
		 window.location.href='index.php';
		 
		 }
		 else { $("#result").html(data.returned_val); 
		 
		    $("#loginform")[0].reset();
		 }
            
			
        },
        error:function(){
          
            $("#result").html('There is error while submit');
        }
        });

        ev.preventDefault();
    });



 
 // send mail
 
 
 
    $('#contact_form').submit(function (ev) {
	 //  var values = $('form#contact_form').serialize();
	   
	   var values = {
    contact_name: $("#contact_name").val(),
    contact_phone: $("#contact_phone").val(),
	 contact_email: $("#contact_email").val(),
    conatct_comment: $("#conatct_comment").val()
};
	   
	   
        $.ajax({
           url: "action1.php?action=mail",
        type: "post",
        data: values,
        success: function(data){ 
		
		data = $.parseJSON(data);
	
	    
		$("#contact_error").html(data.returned_val);
		$('#contact_form')[0].reset();
            
			
        },
        error:function(){
          
            $("#contact_error").html('There is error while submit');
			$('#contact_form')[0].reset();
        }
        });

        ev.preventDefault();
    });
	
  $("a[rel*=modaltrigger]").leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  
  	$("#registerform").submit(function (ev) {
	
	
	form.submit();    
	});
	
 
  
  $("a[rel*=Registertrigger]").leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  
  
});




$(function(){

$("#payform").submit(function (ev) {
	
	
	form.submit();    
	});

/*
 jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Letters only please"); 

   $("#payform").validate({
   rules: {
    name: { lettersonly: true },
	 repassword: {
      equalTo: "#ppassword"
}
  },
   submitHandler: function(form) { 
	
           form.submit();        
         }	
   
   }); */
  $("a[rel*=paytrigger]").leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});


</script> 
<script>
function check_regis(val,id){

var xmlhttp;
if (window.XMLHttpRequest)
  { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	
	 if(xmlhttp.responseText==1&& id==1) { 

	    document.getElementById("email_regis").value='';
		document.getElementById("error_email").innerHTML='email-id already exist';
		 document.getElementById("pemail_regis").value='';
		document.getElementById("perror_email").innerHTML='email-id already exist';
		
	}	
	
	
   
   
    }
  }

xmlhttp.open("GET","ajax.php?row_id="+id+"&val="+JSON.stringify(val),true);
xmlhttp.send();
}


</script> 

<!--Start of Zopim Live Chat Script--> 
<!--
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2aggsiHbMzkgZ0tlCixhmmDkPdXICpxx';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>--> 
<!--End of Zopim Live Chat Script-->

<div id="contact" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header contact-box">
        <button type="button" class="close-cont" data-dismiss="modal" aria-hidden="true">×</button>
        <h4>Contact Us</h4>
      </div>
      <div class="modal-body clearfix">
        <div class="col-md-5">
          <h3 class="form-heading">Address</h3>
          <address>
          <ul>
            <li><strong> Skillizen Learning Solutions Pvt. Ltd.</strong></li>
            <li>C-402, 4th Floor, Nirvana Courtyard </li>
            <li>Nirvana Country, Sec 50 </li>
            <li>Gurgaon, Haryana 122018 </li>
            <li>Phone: +91 124 4011681</li>
            <li>Email: info@skillizen.com </li>
          </ul>
          </address>
        </div>
        <div class="col-md-7">
          <h3 class="form-heading">Query Form</h3>
          <form action="#" method="post">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  placeholder="Name" class="form-control"  type="text" name="cname"  pattern="[A-Za-z '-]{2,}" title="Only letters and white space allowed" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input placeholder="E-Mail Address" class="form-control" name="cemail"  type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid email id" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input  placeholder="Mobile Number" class="form-control" name="cphone" type="text"  required="required" pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" title="not a valid phone number">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="Write Your Message Here..." required></textarea>
              </div>
            </div>
            <div class="text-center"> 
              <!-- Button -->
              <div class="form-group">
                <button type="submit" class="select-but ligin-btn" name="contactsend" >Send <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
error_reporting(E_ALL);
if(isset($_POST['contactsend'])){
$sql = "insert into contactus (name,email,phone,comment)values('" . $_POST['cname'] . "','" . $_POST['cemail'] . "','" . $_POST['cphone'] . "','" . $_POST['comment'] . "')";
    $res = mysqli_query($con,$sql);
    if($res){
    echo '<script type="text/javascript">alert("your query submitted");</script>';
    }else{
    echo '<script type="text/javascript">alert("Sorry");</script>';
}
}
?>
</body>
</html>