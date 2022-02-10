
<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>

<?php include './sections/header' ?>
    <div class="page-heading text-center">
      <div class="container zoomIn animated">
        <h1 class="page-title">ABOUT US <span class="title-under"></span></h1>	
      </div>
    </div>

    <div class="main-container">
      <div class="container">
        <div class="row fadeIn animated">
          <div class="col-md-6">
            <img src="assets/images/about.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-6">
            <h2 class="title-style-2">ABOUT JOFAYE <span class="title-under"></span></h2>
            <p>
              Jude Foundation for African Youth Empowerment (JOFAYE) was established in 2012 in Abuja, Nigeria and later registered at the corporate affairs commission (CAC) in 2021.
              JOFAYE is a non- profit organization geared towards building, grooming and nurturing the African child in becoming independent of their future.
              Basically, JOFAYE is concerned towards preparing the African youth to better harness the vast potentials in them while guiding them to self enhancement and actualization of their desired goals and ambitions. 
            </p>
            <p>
                Children in Africa are influenced by numerous distinctive sorts of mishandle, counting financial and sexual misuse, sex segregation in instruction and get to wellbeing, and their association in equipped struggle. Other variables influencing African children incorporate movement, early marriage, contrasts between urban and provincial regions, child-headed families, road children and destitution.
            </p>
            <p>
                We perceives the child's special and advantaged put in African society which African children require assurance and uncommon care as well as delight of flexibility of expression, affiliation, quiet get together, thought, religion, and inner voice.
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php include './sections/intro-section' ?>

        <div class="our-team animate-onscroll fadeIn section-spacing">
            <div class="container">
                <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <div class="thumnail">
                                <img src="assets/images/team/rsz_jude.png" alt="" class="cause-img">    
                            </div>
                            <h4 class="member-name"><a href="#">Jude Okeke</a></h4>
                            <div class="member-position">
                                FOUNDER
                            </div>
                            <div class="btn-holder">
                              <a href="mailto:judeokeke@jofaye.com" class="btn"> <i class="fa fa-envelope"></i> </a>
                              <a href="https://www.facebook.com/jude.n.okeke" class="btn"> <i class="fa fa-facebook"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-instagram"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a> 
                              <a href="https://www.linkedin.com/in/okeke-jude-nnamdi-a5615910/" class="btn"> <i class="fa fa-linkedin"></i> </a> 
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <div class="thumnail">
                                <img src="assets/images/team/team02.png" alt="" class="cause-img"> 
                            </div>
                            <h4 class="member-name"><a href="#">Stella Okeke</a></h4>
                            <div class="member-position">
                                CO-FOUNDER
                            </div>
                            <div class="btn-holder">
                              <a href="mailto:stellaokeke@jofaye.com" class="btn"> <i class="fa fa-envelope"></i> </a>
                              <a href="https://www.facebook.com/stella.u.okenwe" class="btn"> <i class="fa fa-facebook"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-instagram"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                              <a href="https://www.linkedin.com/in/stella-ugonne-okeke-a06278110/" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <div class="thumnail">
                                <img src="assets/images/team/rsz_ikechuckwu.png" alt="" class="cause-img">
                            </div>
                            <h4 class="member-name"><a href="#">Ikechukwu Chianumba</a></h4>
                            <div class="member-position">
                                CO-FOUNDER
                            </div>
                            <div class="btn-holder">
                              <a href="mailto:ikechukwuchianumba@jofaye.com" class="btn"> <i class="fa fa-envelope"></i> </a>
                              <a href="https://www.facebook.com/ChianumbaIyke" class="btn"> <i class="fa fa-facebook"></i> </a>
                              <a href="https://www.instagram.com/iyke_reuben/" class="btn"> <i class="fa fa-instagram"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                              <a href="https://www.linkedin.com/in/reuben-iyke-chianumba-50375678/" class="btn"> <i class="fa fa-linkedin"></i> </a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member">
                            <div class="thumnail">
                                <img src="assets/images/team/rsz_team03.png" alt="" class="cause-img">
                            </div>
                            <h4 class="member-name"><a href="#">Adanma Okolo</a></h4>
                            <div class="member-position">
                                CO-FOUNDER
                            </div>
                            <div class="btn-holder">
                              <a href="mailto:adanmaokolo@jofaye.com" class="btn"> <i class="fa fa-envelope"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-instagram"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
                              <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
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
    <?php include './sections/script-ref' ?>
    </body>
</html>
