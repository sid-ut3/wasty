<?php
  /* 
  Groupe[4] 
  Version : V2.1.2
  
  Ce fichier permet a l'administrateur de visualiser la liste des annonces, faire des Que cherchez-vous ?s et supprimer des annonces .
  le traitement de suppression dans la bdd n'est pas encore fait ,les données saisies dans les formulaires sont récuperés dans des fichiers php ! 
  
  Changements: mise en forme de l'affichage du tableaux lien vers un fichier css externe.
  
  */
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Gestion des annonces</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/divert_style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <script>
      $(document).ready(function() {
      $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
        
      $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
      });
        
      $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','false');
      });
      
      $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','true');
      });
      
      var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');
      
      if(jobCount == '0') {$('.no-result').show();}
        else {$('.no-result').hide();}
          });
      });
          $(document).ready(function(){
      $("#mytable #checkall").click(function () {
              if ($("#mytable #checkall").is(':checked')) {
                  $("#mytable input[type=checkbox]").each(function () {
                      $(this).prop("checked", true);
                  });
      
              } else {
                  $("#mytable input[type=checkbox]").each(function () {
                      $(this).prop("checked", false);
                  });
              }
          });
          
          $("[data-toggle=tooltip]").tooltip();
      });
	</script>
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
    <?php
      session_start();
      include('./php/checkAuth.php');
      include('menu.php');
      verifAuth(3);
        ?>
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
      <div class="row">
      <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Liste des annonces
            </header>
            <div class="panel-body">
              <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="Que cherchez-vous ?">
              </div>
              <span class="counter pull-right"></span>
							<table class="table table-hover table-bordered results">
							  <thead>
                  <tr>
                    <th>#</th>
                    <th class="col-md-5 col-xs-5">Date</th>
                    <th >Utilisateur</th>
                    <th>Titre</th>
                    <th>Sous-catégorie</th>
                    <th>Supprimer</th>
                  </tr>
                  <tr class="warning no-result">
                    <td colspan="4"><i class="fa fa-warning"></i> Aucun résultat</td>
                  </tr>
                </thead>
								<tbody>
							<?php
							/* affichage de la liste des annonces */
							//recuperation du fichier JSON
							$string = file_get_contents("data/Advert_delete/advert.json");
							// transformation du fichier JSON en variable interpretable par PHP
							$json = json_decode($string, true);
							
							// traitement pour les valeurs du fichier JSON
							foreach($json as $key => $value) {
								echo '<tr>';
								echo '</br>';
								foreach($value as $key => $val) {
									echo '<td>'.$val.'</td>';
								}
								echo '<td>';
								echo '<p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" data-title="Supprimer" data-toggle="modal" data-target="#delete" ><i class="icon_close"></i></button></p>';
								echo '</td>';
								echo '</tr>';
							}
							?>
							</table>
							              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon_close"></i></button>
                      <h4 class="modal-title custom_align" id="Heading">Supprimer</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger">Voulez vous vraiment supprimer l'enregistrement?</div>
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-success" >Oui</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                    </div>
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
           </div>
          </section>
        </div>
      </div>
      <!--main content end-->
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!-- colorpicker -->
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  </body>
</html>