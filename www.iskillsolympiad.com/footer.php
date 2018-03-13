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

<div class="f_full">
  <div id="footer" style="clear:both;">
    <section>
    <h3>Company</h3>
      <ul>
        <li><a href="https://www.skillizen.com/about.php" target="_blank">About Us</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contact">Contact Us</a></li>
        <li><a href="https://www.skillizen.com/privacy-policy.php" target="_blank">Privacy Policy</a></li>
        <li><a href="http://skillizen.com/blog/" target="_blank">Blog</a></li>
      </ul>
    </section>
    <section>
      <h3>Join the Conversation</h3>
      <ul>
        <li><a href="https://www.facebook.com/InternationalSkillsOlympiad" target="_blank" class="social-link external-link">Facebook</a></li>
        <li><a href="https://twitter.com/ISkillsOlympiad" target="_blank"  class="social-link twitter external-link">Twitter</a></li>
        <li><a href="https://plus.google.com/+SkillizenOrg" target="_blank" class="social-link google external-link">Google+</a></li>
        <li><a href="http://www.pinterest.com/SkillizenGlobal" target="_blank" class="social-link pinterest external-link">Pinterest</a></li>
      </ul>
    </section>
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90186894-3', 'auto');
  ga('send', 'pageview');

</script>