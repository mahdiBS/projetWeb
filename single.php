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
<title>Grain de beauté | Single </title>
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
<link href="../assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
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
            <li><a class="color" href="index.php">Acceuil</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Parfums<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Femme</h4>
									<ul>
										<li><a href="../Produit/Views/product.php">Eau de parfum</a></li>
										<li><a href="../Produit/Views/product.php">Eau de toilette</a></li>
										<li><a href="../Produit/Views/product.php">Coffret parfum Femme</a></li>
										
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Homme</h4>
								<ul>
										<li><a href="../Produit/Views/product.php">Eau de parfum</a></li>
										<li><a href="../Produit/Views/product.php">Eau de toilette</a></li>
										<li><a href="../Produit/Views/product.php">Coffret parfum Homme</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Enfants</h4>
									<ul>
										<li><a href="../Produit/Views/product.php">Eau de toilette</a></li>
										<li><a href="../Produit/Views/product.php">Eau de senteurs</a></li>
										<li><a href="../Produit/Views/product.php">Parfums sans alcool</a></li>
										<li><a href="../Produit/Views/product.php">Coffret parfum Enfant</a></li>
										
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
										<li><a href="../Produit/Views/product.php">Crayons yeux</a></li>
										<li><a href="../Produit/Views/product.php">Eyeliners</a></li>
										<li><a href="../Produit/Views/product.php">fards à paupières</a></li>
										<li><a href="../Produit/Views/product.php">faux cils</a></li>
										<li><a href="../Produit/Views/product.php">mascara</a></li>
										<li><a href="../Produit/Views/product.php">palette</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Lévres</h4>
								<ul>
										<li><a href="../Produit/Views/product.php">Crayons à levres</a></li>
										<li><a href="../Produit/Views/product.php">Rouge à levres </a></li>
										<li><a href="../Produit/Views/product.php">Gloss</a></li>
										<li><a href="../Produit/Views/product.php">baume à levres</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>teint</h4>
								
<ul>
										<li><a href="../Produit/Views/product.php">Anti cernes/correcteurs</a></li>
										<li><a href="../Produit/Views/product.php">Fards à joues</a></li>
										<li><a href="../Produit/Views/product.php">Fond de teint</a></li>
										<li><a href="../Produit/Views/product.php">Highlither</a></li>
										<li><a href="../Produit/Views/product.php">Contouring</a></li>
										<li><a href="../Produit/Views/product.php">Palette</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>ongles</h4>
								<ul>
									<li><a href="../Produit/Views/product.php">Vernis à ongles</a></li>
									<li><a href="../Produit/Views/product.php">Base et Topcoat</a></li>
									<li><a href="../Produit/Views/product.php">Dissolvant</a></li>
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
										<li><a href="../Produit/Views/product.php">Crayons yeux</a></li>
										<li><a href="../Produit/Views/product.php">Eyeliners</a></li>
										<li><a href="../Produit/Views/product.php">fards à paupières</a></li>
										<li><a href="../Produit/Views/product.php">faux cils</a></li>
										<li><a href="../Produit/Views/product.php">mascara</a></li>
										<li><a href="../Produit/Views/product.php">palette</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Hydratant et nourissant</h4>
								<ul>
										<li><a href="../Produit/Views/product.php">Crayons à levres</a></li>
										<li><a href="../Produit/Views/product.php">Rouge à levres </a></li>
										<li><a href="../Produit/Views/product.php">Gloss</a></li>
										<li><a href="../Produit/Views/product.php">baume à levres</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Anti rides et anti tâches</h4>
								
<ul>
										<li><a href="../Produit/Views/product.php">Anti cernes/correcteurs</a></li>
										<li><a href="../Produit/Views/product.php">Fards à joues</a></li>
										<li><a href="../Produit/Views/product.php">Fond de teint</a></li>
										<li><a href="../Produit/Views/product.php">Highlither</a></li>
										<li><a href="../Produit/Views/product.php">Contouring</a></li>
										<li><a href="../Produit/Views/product.php">Palette</a></li>
										
									</ul>	
								
							</div>							
											<div class="col1 col5">
						<img src="../assets/images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="../Produit/Views/product.php">Solde</a></li>
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
		<h1>Single</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Single</h2>
	</div>
</div>
<?PHP
include "../../Core/ProduitC.php";
if (isset($_GET['IdProduit']))
{
$produit1C=new ProduitC();
$listeProduits=$produit1C->recupererProduit($_GET['IdProduit']);
if(isset($_POST['chercher']))
{
 $listeProduits=$produit1C->rechercherListeProduit2($_POST["search"]);
 
}

//var_dump($listeEmployes->fetchAll());
?>

<?PHP

foreach($listeProduits as $row){
	?>

<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="../assets/images/<?php echo $row['Image'] ;?>">
			        <div class="thumb-image"> <img src="../assets/images/<?php echo $row['Image'] ;?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			   

			  </ul>

		</div>

	</div>	


		<?PHP
}}
?>
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>Nam liber tempor cum</h3>
				<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$140.00</span>
				 <a href="#">click for offer</a>
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Quick Overview:</h4>
				<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
			    <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
				 	</ul>
				 </div>
				 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>

							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				 
			    <a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>
			<div class="clearfix"> </div>
			</div>

		
<?PHP
include($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/CommentaireC.php');

if (isset($_GET['IdProduit']))
{

$commentaire1C=new CommentaireC();
$listeCommentaires=$commentaire1C->recupererCommentaire($_GET['IdProduit']);
//var_dump($listeEmployes->fetchAll());
?>
	<div class="tab-content one" style="position: relative;width:500px;">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts" style="width:2000px;"> 
	<h1>Commentaires:</h1>        

              <form method="get">
                      <table>
                      <?php foreach ($listeCommentaires as $rec):?>
                      <tr>
                        <td>
                            <label><?PHP echo $rec['nom'].'-'.$rec['prenom']?></label> 
                            <h5><?PHP echo $rec['com'] ?></h5>	
                            <td><?PHP 
                            	if(($_SESSION['id']) != ($rec['id']))
                            	{?>
                            		<a style="position: relative;right:500px;" href="signaler.php?idcom=<?PHP echo $rec['idcom'];?>&mail=<?PHP echo $rec['mail']; ?>">Signaler</a>
                            <?PHP
                            	}
                            ?>
                            	</td>

                            <td><?PHP 
                            	if(($_SESSION['id']) == ($rec['id']))
                            	{?>
                            		<a style="position: relative;right:900px;" href="/integrationfinale/back/Views/Avis/supprimerCommentaire.php?idcom=<?PHP echo $rec['idcom'];?>">Supprimer</a>
                            <?PHP
                            	}
                            ?>
                            	</td>
                        </td>
                            <tr>
                            	<td>
                            		<h5><?PHP echo $rec['dat'] ?></h5>
                            	</td>
<?PHP
include_once($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/JaimeC.php');

$jaime1C=new JaimeC();

?>
                            	<td><a style="position: relative;right:600px;" href="action.php?t=1&identifiant=<?PHP echo $_SESSION['id']; ?>&idprod=<?PHP echo $_GET['IdProduit'];?>&idcom=<?PHP echo $rec['idcom'];?>">J'aime(<?PHP 
                            		$listejaimes=$jaime1C->recupererNbj($rec['idcom']); 
                            		echo $listejaimes->rowCount(); ?>)</a></td>
<?PHP
include_once($_SERVER["DOCUMENT_ROOT"] . '/integrationfinale/Core/JaimepasC.php');

$jaimepas1C=new JaimepasC();
 
?>                            	
                            	<td><a style="position: relative;right:1050px;" href="action.php?t=2&identifiant=<?PHP echo $_SESSION['id']; ?>&idprod=<?PHP echo $_GET['IdProduit'];?>&idcom=<?PHP echo $rec['idcom'];?>"">J'aime pas (<?PHP 
                            		$listejaimespas=$jaimepas1C->recupererNbjp($rec['idcom']);
                            		echo $listejaimespas->rowCount(); ?>)</a></td> 


                            </tr>
                        </tr>        
                      <?php endforeach; }?>
                    </table>
              </form>
						</div>
						</div>
						</div> 
						<div class="col-md-6 contact-top">      
						<form method="POST" action="ajouterCommentaire.php">
						<table>							
							<tr>
								<td>
		                        <textarea style="position: relative;right:75px;" rows="4" cols="60" class="in-para" type="text" name="com"></textarea>				
		                    	</td>
							</tr>
							<tr>
								<td>
									<label class="hvr-skew-backward">
									<input type="submit" value="Commenter">
									<input type="hidden" name="Identifiant" value="<?PHP echo $_GET['IdProduit'];?>">
									</label>
									
								</td>

							</tr>
						</table>
						</form>


					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		
  <div class="clearfix"></div>
  </div>
			<!---->	
</div>
<!----->


	
			<!--brand-->
		</nav></div></div></div>
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
<script src="../assets/js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="../assets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../assets/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

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