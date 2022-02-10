<?php
    require 'php/init.php';
    if(isset($_POST['fullname']) && isset($_POST['cemail']) && isset($_POST['subject']) && isset($_POST['message'])){
      $result = $contact_obj->Contact_us($_POST['fullname'],$_POST['cemail'],$_POST['subject'],$_POST['message']);
    }

    if(isset($_POST['email'])){
      $result = $newsletter_obj->Newsletter($_POST['email']);
    }
?>

<?php include './sections/header' ?>
    
	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
		</div>
	</div>

	<div class="main-container fadeIn animated">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-form">
					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>
					<form action="" method="POST" novalidate>
            <div>  
              <?php
                if(isset($result['errorMessage'])){
                  echo '<p class="errorMsg text-black">'.$result['errorMessage'].'</p>';
                }
                if(isset($result['successMessage'])){
                  echo '<p class="successMsg text-black">'.$result['successMessage'].'</p>';
                }
              ?>    
            </div>
						<div class="row">
							<div class="form-group col-md-6">
                <input type="text" name="fullname" class="form-control" placeholder="Fullname*" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" name="cemail" class="form-control" placeholder="Email*" required>
                </div>
						</div>
            <div class="row">
              <div class="col-sm-12">
                <input type="text" name="subject" class="form-control" placeholder="subject*" required>
              </div>
            </div>
            <br />

            <div class="form-group">
              <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
            </div>
            <div class="form-group alerts">

            </div>	
            <div class="form-group">
              <input type="submit" class="btn btn-primary pull-right btn-pils"></input>
            </div>
            <div class="clearfix"></div>
					</form>
				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">
					<h2 class="title-style-2"> JOFAYE Contacts <span class="title-under"></span></h2>
          <p>
            Have a question? Want to get more involved? Want to sponsor an event? Need more info on the nomination process? Have an unexpectedly amazing fundraising idea to share? Just want to chat?
          </p>
					<div class="contact-items">
						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> 450 Forrest Ave, Norristown, PA 19401, USA</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> +1 (215) 594-1521</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> info@jofaye.com</li>
						</ul>
					</div>
          <div class="row">
            <div class="col-md-12">
              <ul class="social-network social-circle">
                  <li><a href="https://www.facebook.com/jofayeafrica" class="fbook-icon social-link" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/jofayeafrica" class="insta-icon social-link" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://www.twitter.com/jofayeafrica" class="twt-icon social-link" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.youtube.com/jofayeafrica" class="ytube-icon social-link" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                  <!-- <li><a href="#" class="lkdIn-icon social-link" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
              </ul>				
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.787092128314!2d-75.3617614844192!3d40.12474798126896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c69615f05404cf%3A0xebe4bcd8ea065c55!2s450%20Forrest%20Ave%2C%20Norristown%2C%20PA%2019401%2C%20USA!5e0!3m2!1sen!2sng!4v1639495042095!5m2!1sen!2sng" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

    <?php include './sections/newsletter' ?>
    <?php include './sections/footer' ?>
    <?php include './sections/script-ref' ?>
    </body>
</html>
