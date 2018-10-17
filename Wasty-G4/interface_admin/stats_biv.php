<?php
  /* 
  Groupe[4] 
  Version : V2.1.2
  
  Ce fichier permet a l'administrateur de visualiser des graphiques bivariés montrant les relations entre differentes variables.
  
  Changements: mettre le traitement d'affichage des graphiques dans des fonctions.
  
  */
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Statistiques bivariées</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    <!-- color picker -->
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
    <?php
      session_start();
      include('./php/checkAuth.php');
      include('menu.php');
      verifAuth(1);
        ?>
    <!--main content start-->
		<section id="main-content">
			<script src="./js/jquery.js"></script>
			<script type="text/javascript" src="./chart/chart.js"></script>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
			$.getJSON('./data/Biv/cat_situation.json',function(data){
				ColumnChart2(data,'','columnchart_div_1','percent')
			})
			$.getJSON('./data/Biv/cat_csp_(annonce).json',function(data){
				ColumnChart2(data,'Categorie de l\'objet en fonction de la CSP de l\'annonceur','columnchart_div_2','percent')
			})	
			$.getJSON('./data/Biv/cat_csp_(recuperation).json',function(data){
				ColumnChart2(data,'Categorie de l\'objet en fonction de la CSP du recuperateur','columnchart_div_3','percent')
			})		
			$.getJSON('./data/Biv/cat_sexe_(annonce).json',function(data){
				ColumnChart2(data,'Categorie de l\'objet en fonction du sexe de l\'annonceur','columnchart_div_4','percent')
			})	
			$.getJSON('./data/Biv/cat_sexe_(recuperation).json',function(data){
				ColumnChart2(data,'Categorie de l\'objet en fonction du sexe du recuperateur','columnchart_div_5','percent')
			})			
			</script>
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Categorie de l'objet en fonction de sa situation
                            </header>
								<div id="columnchart_div_1" style="width: 100%; height: 750px;"></div>
                        </section>
                    </div>
                </div>
            </section>	
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Categorie de l'objet en fonction de la CSP
                            </header>
								<div id="columnchart_div_2" style="width: 100%; height: 750px;"></div>
								<div id="columnchart_div_3" style="width: 100%; height: 750px;"></div>
                        </section>
                    </div>
                </div>
            </section>	
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Categorie de l'objet en fonction du sexe
                            </header>
								<div id="columnchart_div_4" style="width: 100%; height: 750px;"></div>
								<div id="columnchart_div_5" style="width: 100%; height: 750px;"></div>
                        </section>
                    </div>
                </div>
            </section>		
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