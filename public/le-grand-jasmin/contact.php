<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Le Grand Jasmin, établissement d'enseignement privé allant de la maternelle au lycée a ouvert ses portes pour vous accueillir. Cette continuité de l'enfance à l'âge adulte est l'assurance d'une éducation cohérente et harmonieuse.">
  <meta name="keywords" content="Le Grand Jasmin ,ecole privée, ecole , jasmin ,massar,college ,lycces,primaire ,madrassa ">
  <meta name="author" content="Abdelhamid Touil">
  <title>Contact</title>
  <?php include('linkscss.php') ?>
</head>
<body>
<?php include('header.php') ?>
<?php include('rightbar.php')?>
    <!-- /.offcanvas-info -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/contactbg1.jpg">
      <div class="container inner text-center">
        <div class="space90"></div><!-- space-->
        <h1 class="page-title">Contactez nous</h1>
        <p class="lead">contactez nous pour plus d'information de  La Grand Jasmin</p>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
      <div class="container inner">
        <div class="row text-center gutter-60">
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/ui-gps.png" alt="" /></div>
            <p class="mb-0">Oujda<br> Morocco</p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-telephone.png" alt="" /></div>
            <p class="mb-0">06 27 43 34 47<br> 06 27 43 34 47 </p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-email-5.png" alt="" /></div>
            <p class="mb-0"><a class="nocolor" href="mailto:#">manager@email.com</a><br>
              <a class="nocolor" href="mailto:#">asistant@email.com</a></p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="section-title text-center">Écrivez-nous</h2>
            <p class="text-center">Vous avez des questions? Contactez-nous à partir de notre formulaire de contact et nous vous reviendrons sous peu.</p>
            <div class="space30"></div>
            <form id="contact-form" method="post" action="">
              <div class="messages"></div>
              <div class="controls">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Message is required."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-send" value="Send message">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires.</p>
                  </div>
                </div>
              </div>
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7352629031457!2d-1.9090511852834389!3d34.66138819283141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787ca85e798f0b%3A0x9b0ef9b11720a647!2sEstablishment%20%22The%20Grand%20Jasmin%22%20Teaching%20Private%20-%20Oujda!5e0!3m2!1sen!2sma!4v1633616736070!5m2!1sen!2sma" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!--/.google-map -->
    <?php include('script.php') ?>
    <?php include('footer.php') ?>
    </body>
</html>