<?php
	/* 
	Groupe[4] 
	Version : V2.1.2

	Ce fichier c'est la page d'accueil de l'administrateur ou il peut voir des statistiques générales comme le nombre d'utilisateurs,nombre d'annonces..
	et acceder au menu de gestion ou visualisation de graphiques .

	Changements : indentation du code.

	*/
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Administrateur - Tableau de bord</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
              <div class="info-box red-bg">
                <i class="fa fa-cloud"></i>
                <div class="count">419.745</div>
                <div class="title">Nombre de telechargement total</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
              <div class="info-box red-bg">
                <i class="fa fa-users"></i>
                <div class="count">141</div>
                <div class="title">Nombre de personnes connectées</div>
              </div>
              <!--/.info-box-->     
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
              <div class="info-box red-bg">
                <i class="fa fa-stack-overflow"></i>
                <div class="count">22</div>
                <div class="title">Pourcentage d'annonce finalisée</div>
              </div>
              <!--/.info-box-->     
            </div>
          </div>
          <!--/.row-->  
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box brown-bg">
                <i class="fa fa-cloud"></i>
                <div class="count">7.538</div>
                <div class="title">Nombre de téléchargement ce mois-ci</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box dark-bg">
                <i class="fa fa-users"></i>
                <div class="count">4.362</div>
                <div class="title">Nombre de personnes actives ce mois-ci</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">1.426</div>
                <div class="title">Nombre d'annonces publiées ce mois-ci</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box blue-bg">
                <i class="fa fa-stack-overflow"></i>
                <div class="count">672</div>
                <div class="title">Nombre de récupérations effectuées ce mois-ci</div>
              </div>
              <!--/.info-box-->     
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box brown-bg">
                <i class="fa fa-cloud"></i>
                <div class="count">72.428</div>
                <div class="title">Nombre de téléchargement cette année</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box dark-bg">
                <i class="fa fa-users"></i>
                <div class="count">49.736</div>
                <div class="title">Nombre de personnes actives cette année</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">10.243</div>
                <div class="title">Nombre d'annonces publiées cette année</div>
              </div>
              <!--/.info-box-->     
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center">
              <div class="info-box blue-bg">
                <i class="fa fa-stack-overflow"></i>
                <div class="count">4184</div>
                <!--<div style="width:10%;"></div>-->
                <div class="title">Nombre de récupération effectuées cette année</div>
              </div>
              <!--/.info-box-->     
            </div>
          </div>
          <br/><br/><br/>          
        </section>
		<section class="wrapper">
			<div class="row">
				<div class="col-lg-12">
					<section class="panel">
						<header class="panel-heading">
							Général chart
						</header>
							<script src="./js/jquery.js"></script>
							<script type="text/javascript" src="./chart/chart.js"></script>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
							$.getJSON('./data/Home/1.json',function(data){
								AreaChart(data,'Evolution des inscrits','chart_div_1')
							});
							$.getJSON('./data/Home/2.json',function(data){
								ColumnChart(data,'Evolution des comptes crées','chart_div_2')
							});
							$.getJSON('./data/Home/3.json',function(data){
								ColumnChart(data,'Evolution des personnes actives','chart_div_3')
							});
							$.getJSON('./data/Home/4.json',function(data){
								ColumnChart(data,'Evolution du nombre d\'annonces postées','chart_div_4')
							});
							$.getJSON('./data/Home/5.json',function(data){
								ColumnChart(data,'Evolution du nombre de recuperations','chart_div_5')
							});	
							</script>
							<div id="chart_div_1" style="width: 100%; height: 500px;"></div>
							<div id="chart_div_2" style="width: 100%; height: 500px;"></div>
							<div id="chart_div_3" style="width: 100%; height: 500px;"></div>
							<div id="chart_div_4" style="width: 100%; height: 500px;"></div>
							<div id="chart_div_5" style="width: 100%; height: 500px;"></div>
					</section>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="graph.js"></script>
      </section>
      <!--main content end-->
    </section>
    <!-- container section start -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>  
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });
      
      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true
      
          });
      });
      
      //custom select box
      
      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
      $(function(){
      $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
       regions: [{
         values: gdpData,
         scale: ['#000', '#000'],
         normalizeFunction: 'polynomial'
       }]
      },
      backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
       el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
      });
      });
         
    </script>
  </body>
</html>