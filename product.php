<?PHP

include "Core/soldeC.php";
$soldec=new SoldeC();

$listeimage=$soldec->recupereimage();



?>
<!DOCTYPE html>
<html>
<head>
<title>Grain de beauté| Produits</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="login.html">Se connecter</a></li>
						<li><a href="register.html">S'inscrire</a></li>
						<li><a href="checkout.html">Panier</a></li>
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
						<img src="images/me.png" class="img-responsive" alt="">
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
						<img src="images/me1.png" class="img-responsive" alt="">
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
						<img src="images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="product.html">Solde</a></li>
			<li><a class="color3" href="evenements.html">Evenements</a></li>
			<li><a class="color3" href="livraison.html">Livraison</a></li>
			<li><a class="color4" href="404.html">A Propos</a></li>
            <li ><a class="color6" href="contact.html">Contacter</a></li>
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
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
		<h1>Products</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Products</h2>
	</div>
</div>
	<!--content-->


		
					<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
					<?PHP
foreach($listeimage as $row1){ 
	?>
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">

					<div class=" mid-pop">

					<div class="pro-img">
						
							<img src="images/<?PHP echo $row1[0]; ?>"class="img-responsive" alt="">
				

						<div class="zoom-icon " >
							
						<a class="picture" href="images/<?PHP echo $row1[0]; ?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i>
							</a>
						
						</div>
						</div>



						<div class="mid-1">
						<div class="women">
					



					

						
							<a href="" class="add-to item_add hvr-skew-backward">Add to cart</a>
							</div>
							
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								
								  <div class="block">
									
								</div>
								
								<div class="clearfix"></div>

							</div>
								

	<p ><strike style="font-size:200%;">
<?PHP echo $row1[1]; ?> DT</strike><label><em class="item_price"><?PHP echo $row1[2]; ?> DT</em></label></p>
						
						</div>


					</div>

				
<?PHP } ?>

					
					
					
					
					
					
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 product-bottom">
			<!--categories-->
				
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
 			 				 
				 
					
					 <!---->
					 
				   		
		</div>
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/icone1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/icone2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/icone3.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/icone4.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			
			
		</div>
	<!--//content-->
		<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="images/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.html">à propos de nous</a></li>
							<li><a href="contact.html">Contacter nous</a></li>
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
						<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2019 Grain de beauté. Tous droits réservés | Conçu par  <a href="http://Weboss.com/" target="_blank">Weboss </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
</body>
</html>