<!DOCTYPE html>
<html lang="en">
<head><!--Start header-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--for respensif-->
  <meta name="description" content="Le Grand Jasmin, établissement d'enseignement privé allant de la maternelle au lycée a ouvert ses portes pour vous accueillir. Cette continuité de l'enfance à l'âge adulte est l'assurance d'une éducation cohérente et harmonieuse.">
  <meta name="keywords" content="Le Grand Jasmin ,ecole privée, ecole , jasmin ,massar,college ,lycces,primaire ,madrassa ">
  <meta name="author" content="Abdelhamid Touil">
  <title>Demande de Document</title><!--Title-->
  <?php include('linkscss.php') ?><!--Links css-->
</head><!--End header-->
<body><!--start body-->
<?php include('header.php') ?><!--header-->
<?php include('rightbar.php')?><!--right bar-->
    <!-- Start Wrapper -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/SC-812806_L.jpg">
       <!--start container-->
      <div class="container inner text-center">
        <div class="space90"></div><!--Space-->
        <h1 class="page-title">Demande de document</h1>
        <p class="lead">Ecrivé un message a votre prof</p>
      </div>
      <!--End container-->
     </div>
      <!-- /End wrapper-->
      
    <!-- Start wrapper -->
    <div  class="wrapper ">
      <!-- start Container inner-->
        <div  class="container inner">
          <!-- start Row-->
            <div class="row">
              <!-- start column-->
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                  <h2 class="section-title text-center">Écrivez-nous</h2>
                  <div class="space30"></div><!--Space-->
                  <!-- start form -->
                  <form  id="" method="post" action="">
                    <!-- start Controls-->
                    <div class="controls">
                      <!-- start form-row-->
                      <div class="form-row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input style="" id="form_name" type="text" name="massar" class="form-control" placeholder="Code Massar *" required="required" data-error="Code Massar  is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="form_lastname" type="text" name="nom" class="form-control" placeholder="Nom *" required="required" data-error="Nom is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <!-- End form-row-->
                      <!-- start form-row-->
                      <div class="form-row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="nom" type="text" name="prenom" class="form-control" placeholder="Prenom *" required="required" data-error="Prenom is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                    
                        <div class="col-md-6">
                          <div class="form-group">
                            <input id="form_phone" type="text" name="niveau" class="form-control" placeholder="Niveau Scolaire">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <!-- End form-row-->
                      <!-- Start form-row-->
                      <div class="form-row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="4" required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <input type="submit" class="btn btn-send" value="Send message">
                        </div>
                      </div>
                      <!-- /End form-row-->
                      <!-- Start form-row-->
                      <div class="form-row">
                        <div class="col-md-12">
                          <p class="" style="color: rgb(15, 15, 15);"><strong style="color: red;">*</strong> Ces champs sont obligatoires.</p>
                        </div>
                      </div>
                      <!-- End form-row-->
                    </div>
                    <!-- /End Controls-->
                  </form>
                  <!-- /End form -->
                </div>
                <!-- /End column -->
              </div>
          <!-- /End row -->
        </div>
        <!-- /End container -->
   </div>
      <!-- /.wrapper -->

      <?php include('script.php') ?> <!--Script-->
      <?php include('footer.php') ?><!--Footer-->
</body><!--End body-->
</html><!--End html-->