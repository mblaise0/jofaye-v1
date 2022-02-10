

<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>

<?php include './sections/header' ?>
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/slider/home-slider-01.jpg?1532795369" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">High rate of school dropouts a major concern</h2>
                </div>
              </div>
            </div> 
            <div class="item ">
              <img src="assets/images/slider/home-slider-2.jpg?1428765369" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <!-- <h4 class="carousel-subtitle bounceInUp animated slow"> We rise by lifting others! (Robert Ingersoll)</h4> -->
                </div> 
              </div>
            </div> 

            <div class="item ">
              <img src="assets/images/slider/home-slider-6.jpg?142875689" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow" >Quality education, mentoring and coaching is our driving force</h2>
                </div> 
              </div>
            </div> 
          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

    <?php include './sections/intro-section' ?>

    <div class="section-home home-reasons animate-onscroll fadeIn">
        <div class="container mx-0">
            <div class="row mx-0">
                <div class="col-md-6 reasons-content">
                  <div class="display-on-hover">
                    <p> At JOFAYE we are geared with building, grooming and nurturing the African child in becoming independent of their future.</p>
                  </div>
                  <article>
                      <h2>The African Child Matters</h2>
                      <h4>Together we strive towards a larger goal</h4>
                  </article>
                  <img src="assets/images/reasons/we-care-about.jpg" alt="">
                </div>

                <div class="col-md-6 reasons-content">
                  <div class="display-on-hover">
                    <p> JOFAYE is concerned with preparing the African youth to better harness the vast potentials in them while guiding them to self enhancement and actualization of their desired goals and ambitions. </p>
                  </div>
                  <article>
                      <h2>Youths are the Future</h2>
                      <h4>We are interested in the youth</h4>
                  </article>
                  <img src="assets/images/reasons/youths.jpg" alt="">
                </div>
            </div>
        </div>
    </div>




    <!-- <div class="section-home home-reasons">
        <div class="container mx-0">
            <div class="row mx-0">
                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/we-care-about.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title">The African Child Matters</h3>
                            <h5 class="reason-subtitle">Together we strive towards a larger goal</h5>
                        </div>
                        <div class="on-hover hidden-xs">
                          <p class="banner-text"> At JOFAYE we are geared towards building, grooming and nurturing the African child in becoming independent of their future.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/youths.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title"> Youths are the Future</h3>
                            <h5 class="reason-subtitle">We are interested in the Youths</h5>
                        </div>
                        <div class="on-hover hidden-xs">
                           <p class="banner-text"> JOFAYE is concerned towards preparing the African youth to better harness the vast potentials in them while guiding them to self enhancement and actualization of their desired goals and ambitions. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->

    <?php include './sections/causes' ?>

    <div class="section-home get-involved animate-onscroll fadeIn section-spacing">
        <div class="container">
            <h2 class="title-style-1">How Can You Get Involved? <span class="title-under"></span></h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="reasons-col animate-onscroll fadeIn get-involved">
                        <img src="assets/images/reasons/scholar.png" alt="">
                        <div class="reasons-titles item-title">
                          Sponsor a Scholar<br />
                          <a href="causes.php" class="btn btn-success btn-pils">Learn More</a>
                        </div>
                        <div class="on-hover hidden-xs">
                          <p> 
                            At JOFAYE, we sponsor students who finds it difficult to continue their education due to financial constraints.
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/volunteer.jpg" alt="">
                        <div class="reasons-titles item-title">
                          Become a Volunteer<br />
                          <a href="volunteer.php" class="btn btn-success btn-pils">Learn More</a>
                        </div>
                        <div class="on-hover hidden-xs">
                          <p> We can't overemphasize how important your volunteering can help us in extending our helping hands to the needy. “Volunteers don’t get paid, not because they’re worthless, but because they’re priceless.” – <em>Sherry Anderson</em>. Join us today to spread love.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/school-dropout.jpg" alt="">
                        <div class="reasons-titles item-title">
                          Make a Donation<br />
                          <a href="#donate-container" class="btn btn-success btn-pils">Learn More</a>
                        </div>
                        <div class="on-hover hidden-xs">
                          <p> We thrive to reduce and where possible, end street hawking.This can be possible only through educational engagements and hands on skill training of the African child.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-spacing animate-onscroll fadeIn donate-section">
      <div class="card donate-container" id="donate-container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="donation-title">Make Donation Now</h3>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="phone" class="form-control" id="phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Phone</label>
                  <input type="phone" class="form-control" id="phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="form-group">
                    <label for="inputAddress2">Amount</label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label mr-5">
                      <input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="20" checked>
                      $20</label>
                      <label class="form-check-label mr-5">
                      <input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="50">
                      $50</label>
                      <label class="form-check-label mr-5">
                      <input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="100">
                      $100</label>
                      <label class="form-check-label mr-5">
                      <input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="200">
                      $200</label>
                      <label class="form-check-label">
                      <input onclick="document.getElementById('custom').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" name="type">
                      Others</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" placeholder="above $200" id="custom" disabled />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-pils btn-lg">Donate Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                <div class="item wow fadeInUpBig animated animated" data-number="3" style="visibility: visible;">
                    <i class="fa fa-heart"></i>
                    <p id="number1" class="number">3</p>
                    <span></span>
                    <p>CAUSES</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="10" style="visibility: visible;">
                    <i class="fa fa-globe"></i>
                    <p id="number2" class="number">10</p>
                    <span></span>
                    <p>PLACES</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="20" style="visibility: visible;">
                    <i class="fa fa-user"></i>
                    <p id="number3" class="number">20</p>
                    <span></span>
                    <p>VOLUNTEERS</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="200" style="visibility: visible;">
                    <i class="fa fa-users"></i>
                    <p id="number4" class="number">200</p>
                    <span></span>
                    <p>SAVED</p>
                </div>
            </div>
        </div>
    </div>

    <?php include './sections/newsletter' ?>

<?php include './sections/footer' ?>
<?php include './sections/modals' ?>
<?php include './sections/script-ref' ?>
  
    </body>
</html>

