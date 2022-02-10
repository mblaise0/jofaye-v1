
<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>
<?php include './sections/header' ?>
	<div class="page-heading text-center">
		<div class="container zoomIn animated">
			<h1 class="page-title">OUR CAUSES <span class="title-under"></span></h1>
		</div>
	</div>

    <div class="main-container">
		<div class="our-causes fadeIn animated">
	        <div class="container">
	            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="cause">
                            <img src="assets/images/causes/cause-poverty02.jpg" alt="" class="cause-img">
                            <div class="progress cause-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>
                            </div>
                            <h4 class="cause-title"><a href="#">POVERTY ALLEVIATION</a></h4>
                            <div class="cause-details">
                                Making employment opportunities available is just as important as increasing income and access to basic needs. We use your donations to empower the people in need to fend for themselves.
                            </div>
                            <div class="btn-holder text-center">
                            <a href="donate.html" class="btn btn-primary btn-pils"> DONATE NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cause">
                            <img src="assets/images/causes/cause-edu.png" alt="" class="cause-img">
                            <div class="progress cause-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>
                            </div>
                            <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
                            <div class="cause-details">
                                Education is the passport to the future, for tomorrow belongs to those who prepare for it today. – <em>Malcolm X.</em> With your donations we are able to send dropouts, due to lack of adequate financial aid, back to school.
                            </div>
                            <div class="btn-holder text-center">
                            <a href="donate.html" class="btn btn-primary btn-pils" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cause">
                            <img src="assets/images/causes/cause-carrier.jpg" alt="" class="cause-img">
                            <div class="progress cause-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            </div>
                            </div>
                            <h4 class="cause-title"><a href="#">CARRIER DEVELOPMENT</a></h4>
                            <div class="cause-details">
                              We try to make the living condition in Africa conducive by creating career opportunities.
                                <!-- Freedom means the supremacy of human rights everywhere. Our support goes to those who struggle to gain those rights and keep them - Franklin Delano. We are able to provide legal aid to the defenseless. -->
                            </div>
                            <div class="btn-holder text-center">
                            <a href="donate.html" class="btn btn-primary btn-pils"> DONATE NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="cause">
                            <img src="assets/images/causes/cause-innovators.jpeg" alt="" class="cause-img">
                            <div class="progress cause-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>
                            </div>
                            <h4 class="cause-title"><a href="#">FACILITATING INNOVATORS</a></h4>
                            <div class="cause-details">
                                “Innovation is the unrelenting drive to break the status quo and develop anew where few have dared to go.“ - <em>Steven Jeffes.</em> We have a team that is charged with the responsibility of finding young innovators and fund their projects.
                            </div>
                            <div class="btn-holder text-center">
                            <a href="donate.html" class="btn btn-primary btn-pils"> DONATE NOW</a>
                            </div>
                        </div> 
                    </div>
                </div>
	        </div>
	    </div> 
	</div> 
    <?php include './sections/newsletter' ?>
    <?php include './sections/footer' ?>
    <?php include './sections/modals' ?>
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.prettyPhoto.js"></script>

    <script src="assets/js/main.js"></script>

    </body>
</html>
