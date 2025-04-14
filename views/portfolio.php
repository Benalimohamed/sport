<?php
session_start();
?>
<?PHP
include "../core/produitC.php";

include "../core/categorieC.php";
$categorie1C=new CategorieC();
$listecategories=$categorie1C->affichercategories();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Oxygym+</title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="./style.css">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="index.php"><img class="img-fluid float-right" src="images/logo1.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Acceuil</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.php">Nos Produits</a></a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="abonnement.php">Abonnement</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="coachs.php">Nos Coachs</a></a>
					</li>
					<li class="nav-item">-->
						<a class="nav-link" href="cours.php">Nos Cours</a></a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="salles.php">Nos Salles</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">A propos</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contactez nous</a></a>
					</li>-->
					<li class="nav-item">
					<?php if(isset ($_SESSION["id"])) { ?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else {

	?>
	<!--<a class="nav-link" href="login.php">LOGIN</a></a>-->
	<?php
}
?>
</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<div id="banner-area">
	<img src="images/banner/12657704-5154817365969002.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>shop</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page"></li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio start -->
<!--<section id="main-container" class="portfolio portfolio-box">
	<div class="container">-->
		<!--Isotope filter start -->
		<!--<div class="row text-center">
			<div class="col-12">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>-->
						<?php
	foreach($listecategories as $row){
  ?>
						<!--<li><a href="produitcat.php?idc=<?PHP echo $row['idC']; ?>" class="active" data-filter="*"><?PHP echo $row['nomC']; ?></a></li>-->
						  <?PHP
}
?>
				<!--	</ul>
				</div>
			</div>
		</div>--><!-- Isotope filter end -->
		
                


		<!--<div class="row">-->
			             <?PHP
                    $produit1C=new ProduitC();
                    $listeproduits=$produit1C->afficherproduits();
foreach($listeproduits as $row){
  ?>

<br>
<br>
<br>
<br>

  

  <!--__________________________________________________________________________________-->

  <div class="wrapper">

  <div class="content">
    <div class="bg-shape">
      <img src="" alt="">
    </div>

    <div class="product-img">

      <div class="product-img__item" id="img1">
        <img src="images/portfolio/image (11).png" alt="star wars" class="product-img__img">
      </div>
      <div class="product-img__item" id="img2">
        <img src="images/portfolio/pngwing.com (3).png" alt="star wars" class="product-img__img">
      </div>
      <div class="product-img__item" id="img3">
        <img src="images/portfolio/iProtein-Casein-.png" alt="star wars" class="product-img__img">
      </div>
      <div class="product-img__item" id="img4">
        <img src="images/portfolio/pngwing.com.png" alt="star wars" class="product-img__img">
      </div>
    </div>



    <div class="product-slider">
      <button class="prev disabled">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
        </span>
      </button>
      <button class="next">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
        </span>
      </button>

      <div class="product-slider__wrp swiper-wrapper">
        <div class="product-slider__item swiper-slide" data-target="img4">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405223/starwars/item-4-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                COMBAT <br>
                POWER 
              </h1>
              <span class="product-slider__price">$1.299,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">QUANTITY</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">1</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" checked>
                      <span class="product-labels__txt">2</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">3</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">4</span>
                    </label>

                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
             <!--   <button class="product-slider__cart">
				AJOUTER PANIER
                </button>-->

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>
        <div class="product-slider__item swiper-slide" data-target="img1">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-1-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                PRO <br> GAINER
              </h1>
              <span class="product-slider__price">$9.999,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">QUNATITY</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">1</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">2</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">3</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">4</span>
                    </label>
                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      75%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <!--<button class="product-slider__cart">
				AJOUTER PANIER
                </button>-->

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img2">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-2-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                NITRO TECH <br> POWER 
              </h1>
              <span class="product-slider__price">$2.699,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">THE WEIGHT</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type3" checked>
                      <span class="product-labels__txt">3000 <sup>GRAMS</sup></span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type3">
                      <span class="product-labels__txt">5000 <sup>GRAMS</sup></span>
                    </label>
                  </div>

                  <div class="product-labels__title">QUANTITY</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">1</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" checked>
                      <span class="product-labels__txt">2</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">3</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">4</span>
                    </label>

                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <!--<button class="product-slider__cart">
				AJOUTER PANIER
                </button>-->

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img3">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-3-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                POWER <br>
                BOX
              </h1>
              <span class="product-slider__price">$9.999,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <br>  <div class="product-labels__title">HYPERDRIVE RATING</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type6" checked>
                      <span class="product-labels__txt">NORMAL_CLASS </span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type6">
                      <span class="product-labels__txt">LEGEND_CLASS</span>
                    </label>
                  </div>

                  <br>  <div class="product-labels__title">ARMANENT</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type7" checked>
                      <span class="product-labels__txt">NORMAL BOX</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type7">
                      <span class="product-labels__txt">SUPER BOX</span>
                    </label>
                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      100%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY RATE</span>
                </div>

              </div>

             <!-- <div class="product-slider__bottom">
                <button class="product-slider__cart">
				AJOUTER PANIER
                </button>-->
				<form  method"POST" >

<!--<a type="submit" class="btn btn-primary" name="ajouter" value="ajouter panier " href="panier.php?idP=<?PHP echo $row['idP'];?>&prix=<?PHP echo $row['prix'];?>&image=<?PHP echo $row['image'];?>&nomP=<?PHP echo $row['nomP'];?>">AJOUTER PANIER<a>
<input type="hidden" name="<?php echo $row['idP']?>" />
</form>-->

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        

      </div>
    </div>

  </div>

</div>
<svg class="hidden" hidden>
  <symbol id="icon-arrow-left" viewBox="0 0 32 32">
    <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
  </symbol>
  <symbol id="icon-arrow-right" viewBox="0 0 32 32">
    <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
  </symbol>
</svg>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./script.js"></script>

<!--_______________________________________________________________________________________-->
	
<br>
<br>
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				<div class="plan text-center">
				<!--	<span class="plan-name"><?PHP echo $row['nomP']; ?> <small><?PHP echo $row['description']; ?></small></span>-->
					<p class="plan-price"><sup class="currency">
						<a href="produit.php?id=<?PHP echo $row['idP']; ?>"><img class="" src="images\portfolio\<?php echo $row['image'];?>" style="width: 200px; height:200px;"></a>
					</p>
					<!--<ul class="list-unstyled">
						<li> Prix </h3> : <?PHP echo $row['prix']; ?> Dt</li>-->

					</ul>
					<form  method"POST" >

<a type="submit" class="btn btn-primary" name="ajouter" value="ajouter panier " href="panier.php?idP=<?PHP echo $row['idP'];?>&prix=<?PHP echo $row['prix'];?>&image=<?PHP echo $row['image'];?>&nomP=<?PHP echo $row['nomP'];?>">AJOUTER PANIER<a>
<input type="hidden" name="<?php echo $row['idP']?>" />
</form>				</div>
			</div><!-- plan end -->

		


    <?PHP
}
?>

		</div>
		<!--/ Content row end -->



		</div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>
  	

	<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <!--<div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by John Doe</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div>--><!-- 1st Latest Post end -->

<!-- gamerha mli7 -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#"></a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i></span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#"></a></span>
	            </p>
	          </div>
	        </div<!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#"></a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i></span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#"></a></span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title"></h3>

	       <!-- <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
	              <img src="images/gallery/1.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
	              <img src="images/gallery/2.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
	              <img src="images/gallery/3.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
	              <img src="images/gallery/4.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
	              <img src="images/gallery/5.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/6.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/7.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/8.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/9.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div> -->
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title"></h3>
	        <p></p>
	        <h4></h4>
	        <p></p>
	        <div class="row">
	          <div class="col-md-6">
	            <h4></h4>
	            <p></p>
	          </div>
	          <div class="col-md-6">
	            <h4></h4>
	            <p></p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	         <!--   <input type="email" class="form-control" placeholder="Email Address" required=""> -->
	         <!--   <span class="input-group-addon"> -->
	            <!--  <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button> -->
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	           <!-- <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a> -->
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	          <!--  <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a> -->
	          <!--  <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a> -->
	           <!-- <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a> -->
	          <!--  <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a> -->
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	     <!--   <div class="copyright-info">
	          &copy; Copyright 2019 Themefisher. <span>Designed by <a
	              href="https://themefisher.com">Themefisher.com</a></span>
	        </div> -->
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>