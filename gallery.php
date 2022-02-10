<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>

<?php include './sections/header' ?>

	<div class="page-heading text-center">
		<div class="container zoomIn animated">		
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>	
		</div>
	</div>

	<div class="main-container">
		<div class="container gallery fadeIn animated">
       <div class="row no-gutters">
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/1.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/1.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/2.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/2.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/4.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/4.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/5.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/5.jpg" class="img-fluid" alt="">
              </a>
          </div>
       </div>
       <div class="row no-gutters">
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/3.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/3.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/6.jpeg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/6.jpeg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/7.jpg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/7.jpg" class="img-fluid" alt="">
              </a>
          </div>
          <div class="lightbox-content col-md-3">
              <a href="assets/images/gallery/12.jpeg" data-lightbox="photograph" class="img-fluid">
                  <img src="assets/images/gallery/12.jpeg" class="img-fluid" alt="">
              </a>
          </div>
      </div>
    <nav class="pagination">
      <ul>
        <li><a href="#">&laquo; Previous</a></li>
        <li class="current"><strong>1</strong></li>
        <li><a href="#">2</a></li>
        <li><strong>&hellip;</strong></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">Next &raquo;</a></li>
      </ul>
    </nav>
		</div>
	</div> <!-- /.main-container  -->
    
  <?php include './sections/newsletter' ?>
  <?php include './sections/footer' ?>
  <?php include './sections/modals' ?>
  <?php include './sections/script-ref' ?>
    </body>
</html>
