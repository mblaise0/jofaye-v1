
<?php
require 'php/init.php';
if(isset($_POST['email'])){
  $result = $newsletter_obj->Newsletter($_POST['email']);
}
?>

<?php include './sections/header' ?>
    <div class="page-heading text-center">
      <div class="container zoomIn animated">
        <h1 class="page-title">FAQs <span class="title-under"></span></h1>	
      </div>
    </div>

    <div class="section-home faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3><strong>Frequently Asked Questions</strong></h3>
                    </div>
                    <div class="faq-list">
                        <div class="faq-list-item">
                            <span>1</span>
                            <h5><strong>Q. What does JOFAYE represent?</strong></h5>
                            <p>A/. JOFAYE represents hope for the underprivileged youths and children, as we aim to support those who have the willpower and determination to learn but are constrained due to lack of adequate funding. We work with relevant organizations to provide the needed support to these group of individuals to ensure that they become financially independent in the future. </p>
                        </div>
                        <div class="faq-list-item">
                            <span>2</span>
                            <h5><strong>Q. Which geographic area does JOFAYE serve?</strong></h5>
                            <p>A/. We cover the West African region.</p>
                        </div>
                        <div class="faq-list-item">
                            <span>3</span>
                            <h5><strong>Q. How does JOFAYE reach out to people in actual need?</strong></h5>
                            <p>A/.  We collaborate with community heads to identify individuals who are in actual need, especially those out of school. We also reach out to individuals who are in school but require assistance by liaising with school boards to identify those in need.</p>
                        </div>
                        <div class="faq-list-item">
                            <span>4</span>
                            <h5><strong>Q. Is JOFAYE an Emergency Fund?</strong></h5>
                            <p>A/. It is a bi-annual fund raising activity and support system.</p>
                        </div>
                        <div class="faq-list-item">
                            <span>5</span>
                            <h5><strong>Q. what does JOFAYE mean?</strong></h5>
                            <p>A/. Jude Okeke Foundation for African Youth Empowerment (JOFAYE).</p>
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