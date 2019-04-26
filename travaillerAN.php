<?php 
session_start();
if(isset($_SESSION['login_in']))
{
	       include "../../Core/FideliteC.php";
        $F=new FideliteC();

        $result=$F->recupererfidelite($_SESSION["id"]);
        foreach ($result as $r)
            $pt=$r["pt_fd"];
?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grain de beauté | Travailler avec nous  </title>
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="../assets/css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="../assets/js/jquery.min.js"></script>
<!--- start-rate---->
<script src="../assets/js/jstarbox.js"></script>
	<link rel="stylesheet" href="../assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.html"><img src="../assets/images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<?php if(!isset($_SESSION["login_in"])) { ?>
						<li><a href="login.php">Se connecter</a></li>
						<?php } ?>
						<?php if(!isset($_SESSION["login_in"])) { ?>
						<li><a href="register.html">S'inscrire</a></li>
						<?php } ?>
						<?php if(isset($_SESSION["login_in"])) { ?>
						<li><a href="logout.php">Log out</a></li>
						<?php } ?>
						<?php if(isset($_SESSION["login_in"])&& isset($_SESSION["type"])) { 
							if($_SESSION["type"]!="guest")
							{
							?>
						<li><a href="EditUser.php">Editer Profile</a></li>
						<?php } } ?>
						<?php if(isset($_SESSION["login_in"])&& isset($_SESSION["type"])) {
								if($_SESSION["type"]=="admin")
								{
						 ?>
						<li><a href="../../back/Views/examples/dashboard.html">Interface Admin</a></li>
						<?php }
					} ?>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.html">Acceuil</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Parfums<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Femme</h4>
									<ul>
										<li><a href="product.html">Eau de parfum</a></li>
										<li><a href="product.html">Eau de toilette</a></li>
										<li><a href="product.html">Coffret parfum Femme</a></li>
										
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Homme</h4>
								<ul>
										<li><a href="product.html">Eau de parfum</a></li>
										<li><a href="product.html">Eau de toilette</a></li>
										<li><a href="product.html">Coffret parfum Homme</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Enfants</h4>
									<ul>
										<li><a href="product.html">Eau de toilette</a></li>
										<li><a href="product.html">Eau de senteurs</a></li>
										<li><a href="product.html">Parfums sans alcool</a></li>
										<li><a href="product.html">Coffret parfum Enfant</a></li>
										
									</ul>	
								
							</div>							
						</div>
						
						<div class="col1 col5">
						<img src="../assets/images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Maquillage<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Yeux</h4>
									<ul>
										<li><a href="product.html">Crayons yeux</a></li>
										<li><a href="product.html">Eyeliners</a></li>
										<li><a href="product.html">fards à paupières</a></li>
										<li><a href="product.html">faux cils</a></li>
										<li><a href="product.html">mascara</a></li>
										<li><a href="product.html">palette</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Lévres</h4>
								<ul>
										<li><a href="product.html">Crayons à levres</a></li>
										<li><a href="product.html">Rouge à levres </a></li>
										<li><a href="product.html">Gloss</a></li>
										<li><a href="product.html">baume à levres</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>teint</h4>
								
<ul>
										<li><a href="product.html">Anti cernes/correcteurs</a></li>
										<li><a href="product.html">Fards à joues</a></li>
										<li><a href="product.html">Fond de teint</a></li>
										<li><a href="product.html">Highlither</a></li>
										<li><a href="product.html">Contouring</a></li>
										<li><a href="product.html">Palette</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>ongles</h4>
								<ul>
									<li><a href="product.html">Vernis à ongles</a></li>
									<li><a href="product.html">Base et Topcoat</a></li>
									<li><a href="product.html">Dissolvant</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="../assets/images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Soin<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Nettoyant et demaquillant</h4>
									<ul>
										<li><a href="product.html">Crayons yeux</a></li>
										<li><a href="product.html">Eyeliners</a></li>
										<li><a href="product.html">fards à paupières</a></li>
										<li><a href="product.html">faux cils</a></li>
										<li><a href="product.html">mascara</a></li>
										<li><a href="product.html">palette</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Hydratant et nourissant</h4>
								<ul>
										<li><a href="product.html">Crayons à levres</a></li>
										<li><a href="product.html">Rouge à levres </a></li>
										<li><a href="product.html">Gloss</a></li>
										<li><a href="product.html">baume à levres</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Anti rides et anti tâches</h4>
								
<ul>
										<li><a href="product.html">Anti cernes/correcteurs</a></li>
										<li><a href="product.html">Fards à joues</a></li>
										<li><a href="product.html">Fond de teint</a></li>
										<li><a href="product.html">Highlither</a></li>
										<li><a href="product.html">Contouring</a></li>
										<li><a href="product.html">Palette</a></li>
										
									</ul>	
								
							</div>							
											<div class="col1 col5">
						<img src="../assets/images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="product.html">Solde</a></li>
			<li><a class="color3" href="evenements.html">Evenements</a></li>
			<li><a class="color3" href="livraison.html">Livraison</a></li>
			<li><a class="color4" href="404.html">A Propos</a></li>
            <li ><a class="color6" href="reclamation.html">Réclamer</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a >
						<h3> <div class="total">
							<span ><?php echo $_SESSION["nom"];?></span></div>
							<img style="width: 20px;"src="../assets/images/utilisateur.png" alt=""/></h3>
						</a>
						<p><a  class="simpleCart_empty">Pt Fidelite: <?php echo $pt;?></a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="../assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="../assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
	<div class="banner-top">
	<div class="container">
		<h1>Travailler avec nous</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Travailler avec nous</h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-6 contact-left">
						<h3>Travailler avec nous</h3>
						<p>Nous sommes constamment à la recherche de gens qui ont envie d’apprendre et qui croient en ce qu’ils font, les gens qui ont la bonne attitude. La culture d'entreprise de Grain de beauté est basée sur le travail d'équipe, une communication ouverte et un niveau élevé d’exigence. Ces principes sont la base de l'engagement personnel pour une tâche axée sur la satisfaction du client.

						Grain de beauté offre à ses employés un environnement dynamique et international où les idées sont valorisées et où l’on mise sur la promotion interne. Et ce n'est pas une chimère. Une grande partie de l'équipe de direction a en effet débuté dans le magasin. Nous croyons aussi à la stabilité de l'emploi et à la formation continue. Si vous souhaitez travailler avec nous, c’est vous seul qui posez les limites.

						Vous pouvez connaître toutes les offres disponibles aussi bien au siège que dans les magasins, ou bien tout simplement nous laisser votre CV.</p>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Adresse</h3>
								<p>Grain de Beauté-Menzah Palace 2091 Menzah 6 - ARIANA</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Numéro de téléphone:<h3>
								<p>+216 71 750 429</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><a href="mailto:info@example.com"> GraindeBeaute@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Horaires:</h3>
								<p>Lundi - Samedi: 9h -> 20h30</p>
							</div>
							<div class="clearfix"> </div>
						</div>
</div>
				</div>
				<div class="col-md-6 contact-top">
					<form method="POST" action="ajouterReclamation.php">
						<div>
							<span>Nom:</span>		
							<input type="text" name="nom">						
						</div>
						<div>
							<span>Prenom:</span>		
							<input type="text" name="prenom">						
						</div>
						<div>
							<span>Num° de téléphone:</span>		
							<input type="text" name="num">						
						</div>
						<div>
							<span>Adresse mail:</span>		
							<input type="text" name="adresse">						
						</div>
						<div>
							<span>Date de naissance:</span>		
							<input type="date" name="dat" >						
						</div>
						<div>
							<span>Vous êtes:</span>	
						    <select name="sexe">
							<option value="Femme" class="hvr-skew-backward">Femme</option>
							<option value="Homme">Homme</option>
							</select> 
						</div>
						<!-- CV -->
						<div>
							<span>Dites-nous plus sur vous:</span>		
							<textarea name="description" type="text"> </textarea>	
						</div>
						<label class="hvr-skew-backward">
								<input type="submit" value="Envoyer">
						</label>
					</form>						
				</div>
		<div class="clearfix"></div>
		</div>
		</div>
		<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
					</div>
	</div>

<!--//contact-->
<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="../assets/images/icone1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="../assets/images/icone2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="../assets/images/icone3.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="../assets/images/icone4.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="../assets/images/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.html">à propos de nous</a></li>
							<li><a href="travaillerAN.php">Travailler avec nous</a></li>
							<li><a href="#">Haut de la page </a></li>
							<li><a href="contact.html"><MAP>Plan du site</MAP></a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Historique des commandes</a></li>
							<li><a href="wishlist.html">Liste de souhaits</a></li>
							<li><a href="login.html">Se connecter  </a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Mots clés</h6>
						<ul class="tag-in">
							<li><a href="#">Parfums</a></li>
							<li><a href="#">Maquillage</a></li>
							<li><a href="#">Soins</a></li>
							<li><a href="#">Soldes</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>S'inscrire aux Newsletters</span>
							<form>
								<input type="text" value="Entrer votre E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="S'inscrire">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="../assets/images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="../assets/images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="../assets/images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2019 Grain de beauté. Tous droits réservés | Conçu par  <a href="http://Weboss.com/" target="_blank">Weboss </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="../assets/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../assets/js/bootstrap.min.js"></script>
 
</body>
</html>
<?php
}
    else
        header('location:./login.php');
      ?>