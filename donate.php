
<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>

<?php include './sections/header' ?>
    <div class="page-heading text-center">
      <div class="container zoomIn animated">
        <h1 class="page-title">MAKE YOUR DONATION <span class="title-under"></span></h1>	
      </div>
    </div>

    <div class="section-home  fadeIn animated donate-area">
        <h2 class="donation-title">Thank you For your Donation!</h3>
        <div class="container">
            <div class="card donate-card">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="img-container">
                            <img src="assets/images/donate-page.jpeg" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="donate-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">FirstName</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Lastname</label>
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
            </div>
        </div>
    </div>

    <?php include './sections/newsletter' ?>
    <?php include './sections/footer' ?>
    <?php include './sections/modals' ?>
    <?php include './sections/script-ref' ?>
    </body>
</html>