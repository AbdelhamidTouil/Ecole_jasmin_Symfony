<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Le Grand Jasmin, établissement d'enseignement privé allant de la maternelle au lycée a ouvert ses portes pour vous accueillir. Cette continuité de l'enfance à l'âge adulte est l'assurance d'une éducation cohérente et harmonieuse.">
  <meta name="keywords" content="Le Grand Jasmin ,ecole privée, ecole , jasmin ,massar,college ,lycces,primaire ,madrassa ">
  <meta name="author" content="Abdelhamid Touil">
  <title>Envoie de document</title>
  <?php include('linkscss.php')?>
</head>
<body>
<?php include('header.php')?><!--header-->
<?php include('rightbar.php')?><!--right bar-->

    <!-- Start wrapper -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/OIPp.jpg">
    <!-- Start container-->
      <div class="container inner text-center">
        <div class="space90"></div><!-- Space-->
        <h1 class="page-title">L’envoi des documents</h1>
      </div>
      <!-- /End container -->
    </div>
   <!-- /End wrapper -->

   <!-- Start wrapper -->
   <div class="wrapper">
    <!-- Start container-->
    <div class="container inner">
       <!-- Start row -->
       <div class="row">
         <!-- Start col -->
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="section-title text-center">Écrivez-nous</h2>
          <div class="space30"></div>
          <!-- Start Form -->
          <form id="contact-form" method="post" action="">
             <!-- Start controls-->
             <div class="controls">
              <!-- Start row-->
              <div class="form-row">

                <!-- Start col-->
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="prenom" class="form-label">Prénom</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Prénom *" required="required" data-error="Prénom  is required.">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->   
                
                 <!-- Start col-->
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="nom" class="form-label">Nom</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Nom *" required="required" data-error="Nom is required.">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->
                

              </div><!-- /End form row--> 

                  <!-- Start form  row-->
                  <div class="form-row">
                <!-- Start col-->
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="classe" class="form-label">Classe</label>
                    <input  type="text" name="classe" class="form-control" placeholder="Classe *" required="required" data-error="Classe is required.">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->
                
                <!-- /Start col-->
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="prenom" class="form-label">Quantité</label>
                    <input name="quantité" type="number" value="1" class="form-control" min="1">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->
                
              </div> <!-- /End form row-->
             

                 <!-- Start form  row-->
                 <div class="form-row">
                <!-- Start col-->
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="date" class="form-label">Date d'impression</label>
                    <input id="form_name" type="date" name="dateinpression" class="form-control" placeholder="Date d'impression *" required="required" data-error="Date d'impression  is required.">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->
                
                   <!-- Start col-->
                   <div class="col-md-6">
                  <div class="form-group">
                  <label for="piece_joider" class="form-label">sélectionner le ficher a utiliser</label>
                    <input id="form_name" type="file" name="piecejoider"   required="required" data-error="Date d'impression  is required.">
                    <div class="help-block with-errors"></div>
                  </div><!-- /End form group-->
                </div><!-- /End col-->
  
                </div><!-- /End form row-->

                    <!-- Start row-->
              <div class="form-row">
                <!-- Start col-->
                <div class="col-md-12">
                  <input type="submit" class="btn btn-send" value="envoie">
                </div>
                <!-- /End col-->
              </div>
              <!-- /End row-->

              <!-- Start row-->
              <div class="form-row">
                <!-- start col-->
                <div class="col-md-12">
                  <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires.</p>
                </div>
                <!-- /End col-->
              </div>
              <!-- /End row-->

            </div><!-- /End controls--> 
          </form><!-- /End form--> 
        </div><!-- /End column--> 
        </div><!-- /End row--> 
     </div><!-- /End container--> 
  </div><!-- /End wrapper--> 

    <?php include('script.php')?><!--footer-->
    <?php include('footer.php')?><!--footer-->
</body>
</html>