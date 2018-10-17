<header class="header dark-bg">
	<div class="toggle-nav">
		<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
	</div>
	<!--logo start-->
	<a href="index.php"><img src="img/logo.png" width="250px" height="55px"  ></a>
	<!--  search form end -->                
	</div>
	<div class="top-nav notification-row">
		<!-- notificatoin dropdown start-->
		<ul class="nav pull-right top-menu">
			<a href="deconnexion.php"><i class="icon_key_alt"></i> Deconnexion</a>
		</ul>
		<!-- notificatoin dropdown end-->
	</div>
</header>
<!--header end--> 
<!--sidebar start-->
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu">
			<?php
				if($_SESSION['level'] == 4){
					print('
						<li class="sub-menu">
						<a href="javascript:;" class="">
						<i class="icon_document_alt"></i>
						<span>Utilisateur</span>
						<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
						<li><a class="" href="user_add.php">Ajout</a></li> 
						<li><a class="" href="user_modif.php">Modification</a></li>
						<li><a class="" href="user_delete.php">Suppression</a></li>
						</ul>
						</li>');
				}
				if($_SESSION['level'] > 1){
					print('
						<li class="sub-menu">
						<a href="javascript:;" class="">
						<i class="icon_table"></i>
						<span>Ville</span>
						<span class="menu-arrow arrow_carrot-right"></span>
						
						</a>
						<ul class="sub">
						<li><a class="" href="district.php">Gestion quartiers</a></li>    
						<li><a class="" href="city.php">Gestion villes</a></li> 
						
						
						</ul>
						
						</li>
				
						
						<li class="sub-menu">
						<a href="javascript:;" class="">
						<i class="icon_table"></i>
						<span>Catégorie</span>
						<span class="menu-arrow arrow_carrot-right"></span>
						
						</a>
						<ul class="sub">
						<li><a class="" href="category.php">Gestion catégories</a></li>                          
						<li><a class="" href="sub_category.php">Gestion sous catégories</a></li>
						
						</ul>
						
						</li>
				
						<li class="sub-menu">
						<a href="javascript:;" class="">
						<i class="icon_documents_alt"></i>
						<span>Point de collecte</span>
						<span class="menu-arrow arrow_carrot-right"></span>
						
						</a>
						<ul class="sub">
						<li><a class="" href="pick_up_point.php">Gestion points collecte</a></li>                          
						
						
						</ul>
						
						</li>');
				}
				if($_SESSION['level'] > 2){
				print('
				<li class="sub-menu">
				<a href="javascript:;" class="">
				<i class="icon_table"></i>
				<span>Annonce</span>
				<span class="menu-arrow arrow_carrot-right"></span>
				
				</a>
				<ul class="sub">
				<li><a class="" href="advert.php">Gestion annonces</a></li>
				</ul>
				
				</li>');
				}
				?>
			<li class="sub-menu">
				<a href="javascript:;" class="">
				<i class="icon_piechart"></i>
				<span>Statistiques</span>
				<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li><a class="" href="stats_user.php">Utilisateur</a></li>
					<li><a class="" href="stats_advert.php">Annonces</a></li>
					<li><a class="" href="stats_recovery.php">Récupération</a></li>                   
					<li><a class="" href="stats_geo.php">Stat géo</a></li>
					<li><a class="" href="stats_biv.php" style="font-size: 80%">Comparaison de variables</a></li>
				</ul>
			</li>
		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->