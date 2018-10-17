<?php
    /* 
    Groupe[4] 
    Version : V2.1.2
    
    Ce fichier permet a l'administrateur de visualiser des graphiques en relation avec les utilisateur comme l'evolution des inscriptions en fonction des mois
    
    Changements: mettre le traitement d'affichage des graphiques dans des fonctions.
    
    */
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Statistique utilisateurs</title>
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
		    <section class="wrapper">
				  <!--overview start-->
				  <div class="row" >
					<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
					</div>-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="center">
					  <div class="info-box red-bg" >
						<i class="fa fa-users"></i>
						<div class="count">22</div>
						<div class="title">Nombre d'utilisateurs cette année</div>
					  </div>     
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="center">
					  <div class="info-box red-bg">
						<i class="fa fa-users"></i>
						<div class="count">22</div>
						<div class="title">Nombre d'utilisateurs ce mois-ci</div>
					  </div>    
					</div>
				  </div>
				  <!--/.row-->         
			</section>
			<script src="./js/jquery.js"></script>
			<script type="text/javascript" src="./chart/chart.js"></script>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
			// Recuperation du fichier json dans une variable javascript data
			// 
			$.getJSON('./data/Users/Part1/1.json',function(data){
				PieChart(data,'Répartition des utilisateurs par sexe ','piechart_div_1')									
			})
			$.getJSON('./data/Users/Part3/1.json',function(data){
				PieChart(data,'Répartition des utilisateurs par sexe en fonction du mois','piechart_div_2')	
			})
			$.getJSON('./data/Users/Part2/1.json',function(data){
				PieChart(data,'Répartition des utilisateurs par sexe en fonction de l\'année','piechart_div_3')	
			})
			$.getJSON('./data/Users/Part4/1.json',function(data){	
				LineChart2(data,'évolution des utilisateurs en fonction du sexe','linechart_div_1')
			})
			$.getJSON('./data/Users/Part1/2.json',function(data){	
				BarChart(data,'Répartition des utilisateurs par catégorie socio-professionnelle','barchart_div_1')
			})		
			$.getJSON('./data/Users/Part3/2.json',function(data){	
				BarChart(data,'Répartition des utilisateurs par catégorie socio-professionnelle en fonction du mois','barchart_div_2')
			})
			$.getJSON('./data/Users/Part2/2.json',function(data){	
				BarChart(data,'Rrépartition des utilisateurs par catégorie socio-professionnelle en fonction de l\'annnée','barchart_div_3')
			})
			$.getJSON('./data/Users/Part4/2.json',function(data){	
				LineChart2(data,'évolution des utilisateurs en fonction de la catégorie socio-professionnelle','linechart_div_2')
			})	
			$.getJSON('./data/Users/Part1/3.json',function(data){	
				BarChart(data,'Répartition des utilisateurs suivant leur date de naissance','barchart_div_4')	
			})
			$.getJSON('./data/Users/Part3/3.json',function(data){	
				BarChart(data,'Répartition des utilisateurs suivant leur date de naissance en fonction du mois','barchart_div_5')	
			})				
			$.getJSON('./data/Users/Part2/3.json',function(data){
				BarChart(data,'Répartition des utilisateurs suivant leur date de naissance en fonction de l\'année','barchart_div_6')		
			})	
			$.getJSON('./data/Users/Part4/3.json',function(data){	
				LineChart2(data,'évolution des utilisateurs en fonction de l\'age','linechart_div_3')
			})				
			</script>	
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Répartition des utilisateurs par sexe
                            </header>
							<section class="wrapper">
								  <!--overview start-->
								  <div class="row" >
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="piechart_div_1" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="piechart_div_2" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="piechart_div_3" style="width: 100%; height: 500px;"></div>
									</div>									
								  </div>
								  <!--/.row-->  						
							</section>							
							<div id="linechart_div_1" style="width: 100%; height: 500px;"></div>
                        </section>
                    </div>
                </div>
            </section>
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Répartition des utilisateurs par catégorie socio-professionnelle
                            </header>							
							<section class="wrapper">
								  <!--overview start-->
								  <div class="row" >
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_1" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_2" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_3" style="width: 100%; height: 500px;"></div>
									</div>									
								  </div>
								  <!--/.row-->  						
							</section>				
								<div id="linechart_div_2" style="width: 100%; height: 500px;"></div>
                        </section>
                    </div>
                </div>
            </section>
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">						
                            <header class="panel-heading">
                                Répartition des utilisateurs suivant leur date de naissance
                            </header>
								  <div class="row" >
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_4" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_5" style="width: 100%; height: 500px;"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
										<div id="barchart_div_6" style="width: 100%; height: 500px;"></div>
									</div>									
								  </div>
								<div id="linechart_div_3" style="width: 100%; height: 500px;"></div>
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