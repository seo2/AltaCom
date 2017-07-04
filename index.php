<?php

// Include and instantiate the class.
require_once '2017/Mobile_Detect.php';
$detect = new Mobile_Detect;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Alta | Brand PR </title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="2017/images/favicon.png">
<!--     <link rel="icon" href="2017/images/favicon.ico" type="image/x-icon"> -->

    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>

    <link href="2017/css/icon-font/pe-icon-7.css" rel="stylesheet">

    <link href="2017/css/bootstrap.min.css" rel="stylesheet">

    <link href="2017/css/animsition.css" rel="stylesheet">

    <link href="2017/css/masterslider/masterslider.css" rel="stylesheet">

    <link href="2017/revolution/css/settings.css" rel="stylesheet">
    <link href="2017/revolution/css/layers.css" rel="stylesheet">
    <link href="2017/revolution/css/navigation.css" rel="stylesheet">
    
	<link href="2017/assets/instashow/jquery.instashow.css" rel="stylesheet">

    <link href="2017/css/style.css" rel="stylesheet">


    <script src="2017/js/modernizr.js"></script>
        
	<link href="2017/assets/instashow/jquery.instashow.css" rel="stylesheet">
	
    <script src="https://use.fontawesome.com/febe3bcfc2.js"></script>

</head>

<body data-smooth-scroll="true">

    <div class="animsition-overlay" data-animsition-overlay="true">

        <header>

            <div class="nav-wrap is-fixed is-shrink off-canvas" data-is-fill="true">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12 carna-menu-wrap">

                            <ul class="carna-menu menu-highlight menu-smooth">
                                <li>
                                    <a href="#home" data-scroll class="scrollTo active">Inicio</a>

                                </li>

                                <li><a href="#about" data-scroll class="scrollTo">Lo que hacemos</a>

                                </li>

                                <li><a href="#services" data-scroll class="scrollTo">Clientes</a>

                                </li>
                                <li><a href="#contact" data-scroll class="scrollTo">contacto</a>

                                </li>

                            </ul>
                            <!-- end of menu -->

                        </div>
                        <!-- / col-md-9 -->
                        <!-- / col-xs-6 -->

                        <div class="col-xs-9 col-sm-6 col-md-3 brand-band">

                            <div class="brand-wrap clearfix">

                                <a href="index.php" class="brand">
                                    <img src="2017/images/logo/logo-blanco.gif" class="logo-white retina-img" alt="">
                                    <img src="2017/images/logo/logo.gif" class="logo-dark retina-img" alt="">

                                </a>
                            </div>

                        </div>
                        <!-- / col-xs-6 -->

                        <div class="col-xs-3 text-left button-wrap">
                            <button class="button-trigger"><span></span>
                            </button>
                        </div>


                        <div class="col-md-12 mobile-wrap" data-one-page="true" data-has-button="true">
                            <ul class="carna-menu-mobile mobile-smooth" data-scroll-header>

                                <li>
                                    <a href="#home" class="active scrollToMini" data-scroll>Inicio</a>

                                </li>
                                <li><a href="#about" data-scroll class="scrollToMini">Lo que hacemos</a>

                                </li>
                                <li><a href="#services" data-scroll class="scrollToMini">Clientes</a>

                                </li>
                                <li><a href="#contact" data-scroll class="scrollToMini">contacto</a>

                                </li>
                            </ul>

                        </div>
                        <!-- / col-md-12 -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- end row -->

                </div>
                <!-- end container -->

            </div>
            <!-- end nav-wrap -->

        </header>
        <!-- end header -->

        <div id="wrapper" class="content-wrapper wrapper">

            <div id="home" class="pages">
			
				<? 
					if ( $detect->isMobile() ) {
						include('include-slider-mobile.php'); 
					}else{
						include('include-slider-desktop.php'); 
					}
				?>

            </div>
            <!-- end home -->

            <div id="about" class="pages">
                <div class="container-fluid space-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="section-header">Lo que hacemos <span class="underline animated" data-animation="fullWidth"></span></h1>
                        </div>
                        <!-- / col-md-12 -->
                    </div>
                    <!-- / row -->

                    <div class="row">
<?php
	// Any mobile device (phones or tablets).
	if ( $detect->isMobile() ) {
?>
                        <div data-is
						    data-is-api="assets/instashow/api/"
							<?  if($_GET['hashtag']){ ?>
							data-is-source="#<?= $_GET['hashtag']; ?>" 
							data-is-filter-only="@altabrandpr"
							<? 	}else{ ?>
							data-is-source="@altabrandpr"
							<?	} ?>
						    data-is-width="auto"
						    data-is-height="auto"
						    data-is-columns="5"
							data-is-drag-control="false"
						    data-is-rows="2"
						    data-is-gutter="20" 
						    data-is-direction="vertical"
						    data-is-speed="1100" 
						    data-is-easing="ease-in-out" 
						    data-is-auto="2000" 
						    data-is-popup-easing="ease-in-out" 
						    data-is-lang="es"
						    data-is-info="likesCounter"
							data-is-color-gallery-overlay="rgba(241,61,65,0.9)"
							data-is-color-popup-controls ="rgb(241,61,65)"
							data-is-color-popup-controls-hover ="rgb(241,61,65)"
							data-is-color-popup-overlay="rgba(255,255,255,.9)"
							data-is-popup-info="likesCounter, location, passedTime, description"
							data-is-responsive='{ "600": { "columns": 3, "rows": 4, "gutter": 10 }}'
							data-is-scrollbar="false"
							data-is-easing="ease-in-out"
							data-is-arrows-control="false"
						>
<?php	 
	}else{ 
?>
                        <div data-is
						    data-is-api="2017/assets/instashow/api/"
							<?  if($_GET['hashtag']){ ?>
							data-is-source="#<?= $_GET['hashtag']; ?>" 
							data-is-filter-only="@altabrandpr"
							<? 	}else{ ?>
							data-is-source="@altabrandpr"
							<?	} ?>
						    data-is-width="auto"
						    data-is-height="auto"
						    data-is-columns="5"
							data-is-drag-control="false"
						    data-is-rows="2"
						    data-is-gutter="20" 
						    data-is-direction="vertical"
						    data-is-speed="1100" 
						    data-is-easing="ease-in-out" 
						    data-is-auto="2000" 
						    data-is-popup-easing="ease-in-out" 
						    data-is-lang="es"
						    data-is-info="likesCounter, description"
							data-is-color-gallery-overlay="rgba(241,61,65,0.9)"
							data-is-color-popup-controls ="rgb(241,61,65)"
							data-is-color-popup-controls-hover ="rgb(241,61,65)"
							data-is-popup-deep-linking="true"
							data-is-color-popup-overlay="rgba(255,255,255,.9)"
							data-is-popup-info="none"
							data-is-responsive='{ "600": { "columns": 3, "rows": 4, "gutter": 10 }}'
							data-is-scrollbar="false"
							data-is-easing="ease-in-out"
							data-is-arrows-control="false" 
						>
<?php } ?>
						</div>	
                    </div>
                    <!-- / row -->
                </div>
                <!-- / container -->
            </div>
            <!-- end about -->

            <div id="services" class="pages">


                <section class="test-classic space-y highlight-section">


                    <div class="container-fluid">

	                    <div class="row">
	
	                        <div class="col-md-12 text-center">
	
	                            <h1 class="section-header">Clientes <span class="underline animated" data-animation="fullWidth"></span></h1>
	
	                        </div>
	                        <!-- / col-md-12 -->
	
	                    </div>
	                    <!-- / row -->

                        <div class="row">
                            <!-- end col-md-12 -->
							<?php if ( $detect->isMobile() ) { ?>
							<div id="clientes" class="col-sm-12">
						  		<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.absolut.com/cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ABSOLUT.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.adidas.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ADIDAS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.adidas.cl/originals" target="_blank"><img src="2017/assets/img/clientes/LOGO_ADIDAS_ORIGINALS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.ae.com/es/international?cm=sCL-cCLP" target="_blank"><img src="2017/assets/img/clientes/LOGO_AEO.png?v=2" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_ALANIZ.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.altolascondes.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ALTO_LAS_CONDES.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.axe.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_AXE.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.ballantines.com/cl" target="_blank"><img src="2017/assets/img/clientes/LOGO_BALLANTINE'S.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.bresler.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BRESLER.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.brooksbrothers.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BROOKS_BROTHERS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://es.burtsbees.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BURTS_BEES.png?v=2" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.carters.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_CARTER'S.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.chivas.com/es-ar/the-venture" target="_blank"><img src="2017/assets/img/clientes/LOGO_CHIVAS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.cif.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_CIF.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.cocha.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_COCHA.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.cervezacorona.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_CORONA.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.costaneracenter.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_COSTANERA_CENTER.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.drive.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_DRIVE.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.foxsports.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_FOX_SPORTS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.gacel.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GACEL.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.gapchile.com/es/home" target="_blank"><img src="2017/assets/img/clientes/LOGO_GAP.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://opticasgmo.com/cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GMO.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_GREENFIELD.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.guante.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GUANTE.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.hm.com/cl" target="_blank"><img src="2017/assets/img/clientes/LOGO_H&M.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.hellmanns.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_HELLMANS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://johnson.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_JHONSON.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.bresler.cl/Brand/Magnum.aspx" target="_blank"><img src="2017/assets/img/clientes/LOGO_MAGNUM.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.bigtime.cl/" target="_blank"><img src="2017/assets/img/clientes/logo-bigtime.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_MARITTIMO.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	  
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.rimowa.com/" target="_blank"><img src="2017/assets/img/clientes/logo-rimowa.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.omo.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_OMO.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_OPPOSITE.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_PARIS.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.pepsodent.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PEPSODENT.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://mallportal.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PORTAL.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.guante.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PULSO.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.quix.cl/home/" target="_blank"><img src="2017/assets/img/clientes/LOGO_QUIX.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.rexona.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_REXONA.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.daewoo.cl/" target="_blank"><img src="2017/assets/img/clientes/daewoo.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.stives.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ST_IVES.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://us.sunpower.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_SUNPOWER-01.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.swarovski.com/Web_CL/es/index" target="_blank"><img src="2017/assets/img/clientes/LOGO_SWAROVSKI.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="http://www.teclub.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_TE_CLUB.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://thenorthface.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_TNF.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->	   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://http://www.total-chile..cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_TOTAL-01.png" class="img-responsive grayscale"></a>
								</div></div>   
								<div class="col-xs-6"><div class="logocliente">
									<a href="https://www.sonymobile.com/cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_XPERIA.png" class="img-responsive grayscale"></a>
								</div></div> <!-- logocliente -->									
							</div>
							<?php }else{ ?>
                            <div class="col-md-12">
                   		  		<ul class="bx-slider"
									data-bx-mode="vertical"	
									data-bx-delay="100"
									data-bx-auto-play="true"
									data-bx-control="true"
									data-bx-pager="false"
									data-bx-easing="easeInOutQuint"
									data-bx-speed="1900">
	                   		  		<li>
		                   		  		<div class="row">
			                   		  		<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.absolut.com/cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ABSOLUT.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.adidas.cl/mujer" target="_blank"><img src="2017/assets/img/clientes/LOGO_ADIDAS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.adidas.cl/originals" target="_blank"><img src="2017/assets/img/clientes/LOGO_ADIDAS_ORIGINALS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://www.ae.com/es/international?cm=sCL-cCLP" target="_blank"><img src="2017/assets/img/clientes/LOGO_AEO.png?v=2" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_ALANIZ.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.altolascondes.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ALTO_LAS_CONDES.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.axe.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_AXE.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.ballantines.com/cl" target="_blank"><img src="2017/assets/img/clientes/LOGO_BALLANTINE'S.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.bresler.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BRESLER.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://www.brooksbrothers.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BROOKS_BROTHERS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div> 
		                   		  		</div>
								  		
	                   		  		</li>
									 
	                   		  		<li>
		                   		  		<div class="row">	
			                   		  		<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://es.burtsbees.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_BURTS_BEES.png?v=2" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.miladysenorita.cl/" target="_blank"><img src="2017/assets/img/clientes/MLS-01.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://www.chivas.com/es-ar/the-venture" target="_blank"><img src="2017/assets/img/clientes/LOGO_CHIVAS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.cif.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_CIF.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://www.cocha.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_COCHA.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.cervezacorona.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_CORONA.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.costaneracenter.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_COSTANERA_CENTER.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.drive.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_DRIVE.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.foxsports.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_FOX_SPORTS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.gacel.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GACEL.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
		                   		  		</div>
					   		  		
									</li>

	                   		  		<li>
		                   		  		<div class="row">
			                   		  		<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.gapchile.com/es/home" target="_blank"><img src="2017/assets/img/clientes/LOGO_GAP.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://opticasgmo.com/cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GMO.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://www.oporto.cl/" target="_blank"><img src="2017/assets/img/clientes/oporto.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://www.guante.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_GUANTE.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://www.hm.com/cl" target="_blank"><img src="2017/assets/img/clientes/LOGO_H&M.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://www.hellmanns.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_HELLMANS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://johnson.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_JHONSON.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="https://www.jomalone.com/" target="_blank"><img src="2017/assets/img/clientes/brandintrologo-jomalone.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
												<a href="http://www.malloa.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_MALLOA.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://http://www.total-chile..cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_TOTAL-01.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
		                   		  		</div>
					   		  			 
									</li>
									
	                   		  		<li>
					   		  			<div class="row">
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://www.omo.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_OMO.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_OPPOSITE.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.paris.cl/tienda/es/paris" target="_blank"><img src="2017/assets/img/clientes/LOGO_PARIS.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.pepsodent.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PEPSODENT.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://mallportal.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PORTAL.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.guante.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_PULSO.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.quix.cl/home/" target="_blank"><img src="2017/assets/img/clientes/LOGO_QUIX.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.rexona.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_REXONA.png" class="img-responsive grayscale"></a>
									  			</div>
											</div> 		
						   		  			<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.soft.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_SOFT.png" class="img-responsive grayscale"></a>
									  			</div>
											</div> 	
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.stives.com/" target="_blank"><img src="2017/assets/img/clientes/LOGO_ST_IVES.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>		   		  				
					   		  			</div>
 
									</li>
									
	                   		  		<li>
		                   		  		<div class="row"> 
											<div class="col-md-15">
												<div class="logocliente">
													<a href="http://mbfashionweek.com/" target="_blank"><img src="2017/assets/img/clientes/mercedesbenzfw.jpg" class="img-responsive grayscale"></a>
												</div>
											</div>
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.swarovski.com/Web_CL/es/index" target="_blank"><img src="2017/assets/img/clientes/LOGO_SWAROVSKI.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="http://www.nyxcosmetics.es/" target="_blank"><img src="2017/assets/img/clientes/NYX_logo.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
											<div class="col-md-15">
									  			<div class="logocliente">
													<a href="https://thenorthface.cl/" target="_blank"><img src="2017/assets/img/clientes/LOGO_TNF.png" class="img-responsive grayscale"></a>
									  			</div>
											</div>  
		                   		  		</div>
	                   		  		</li>
									
						  		</ul>
                            </div>
							<?php } ?>

                        </div>
                        <!-- / row -->

                    </div>
                    <!-- / container-->

                </section>
                <!-- / test-classic-->

            </div>
            <!-- end services -->



            <div id="contact" class="pages">

                <div class="container space-y-t" style="padding-top: 40px;">

                    <div class="row">

                        <div class="col-md-12 text-center">

                            <h1 class="section-header">Contáctanos <span class="underline animated" data-animation="fullWidth"></span></h1>

                        </div>
                        <!-- / col-md-12 -->

                    </div>
                    <!-- / row -->

                </div>
                <!-- / container -->

                <div class="pattern-bg">

                    <div class="container padding-y">

                        <div class="row">

                            <div class="col-md-4">
	                            
					            <div class="mm-menu__address">
					                <h6 class="text-uppercase">Info de contacto</h6>
					                <ul class="mm-menu__list">
					                    <li>contacto@altacomunicacion.cl</li>
					                </ul>
					            </div>
					            <!-- / mm-menu__address-->
					
					            <div class="mm-menu__address">
					                <h6 class="text-uppercase"><img src="2017/assets/img/chile.png" class="bandera">Oficinas Chile:</h6>
					                <ul class="mm-menu__list">
					                    <li>Emilio Vaisse 350</li>
					                    <li>Providencia, Santiago</li>
					                    <li>+56 2 2456 789</li>
					                </ul>
					
					                <ul class="mm-menu__social">
					                    <li class="in-view" style="transition: opacity 0.5s 0.5s, transform 0.5s 0.5s;">
						                    <a target="_blank" href="https://www.instagram.com/altabrandpr/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					                    </li>
					                    <li class="in-view" style="transition: opacity 0.5s 0.6s, transform 0.5s 0.6s;">
						                    <a target="_blank" href="https://twitter.com/ALTAbrandPR"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
					                    </li>
					                </ul>
					                
					                <h6 class="text-uppercase"><img src="2017/assets/img/peru.png" class="bandera">Oficinas Perú:</h6>
					                <ul class="mm-menu__list">
					                    <li>Av. Camino Real 1225, Of. 502</li>
					                    <li>San Isidro, Lima</li>
<!-- 					                    <li>+123 456 789</li> -->
					                </ul>
					
					                <ul class="mm-menu__social">
					                    <li class="in-view" style="transition: opacity 0.5s 0.5s, transform 0.5s 0.5s;">
						                    <a target="_blank" href="https://www.instagram.com/dontpanicalta/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					                    </li>
					                </ul>
					
<!--
					                <ul class="mm-menu__social">
					                    <li class="in-view" style="transition: opacity 0.5s 0.5s, transform 0.5s 0.5s;">
						                    <a target="_blank" href="https://www.instagram.com/altabrandpr/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					                    </li>
					                    <li class="in-view" style="transition: opacity 0.5s 0.6s, transform 0.5s 0.6s;">
						                    <a target="_blank" href="https://twitter.com/ALTAbrandPR"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
					                    </li>
					                </ul>
-->
					                <!-- / mm-menu__social -->
					            </div>
					            <!-- / mm-menu__address-->
					            
                            </div>
                            <div class="col-md-8">

                                <div class="quform-outer">

                                    <form class="quform form-overlay" action="2017/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                        <div class="quform-inner">

                                            <div class="quform-elements">

                                                <div class="row">

                                                    <!-- Begin Text input element -->
                                                    <div class="quform-overlay quform-element clearfix quform-element-text col-md-6">

                                                        <label for="name">Nombre <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <input id="name" type="text" name="name" />
                                                        </div>

                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Text input element -->
                                                    <div class="quform-overlay quform-element clearfix quform-element-text col-md-6">

                                                        <label for="email">Email <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <input id="email" type="text" name="email" />
                                                        </div>

                                                    </div>
                                                    <!-- End Text input element -->

                                                    <!-- Begin Textarea element -->
                                                    <div class="quform-overlay quform-element clearfix quform-element-textarea quform-huge col-md-12">

                                                        <label for="message">Mensaje <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <textarea id="message" name="message" style="height: 130px;"></textarea>
                                                        </div>

                                                    </div>
                                                    <!-- End Textarea element -->

                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit-overlay col-md-12 clearfix">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit" value="Send" class="btn-main small"><span>Enviar</span>
                                                            </button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span>
                                                        </div>
                                                    </div>
                                                    <!-- End Submit button -->
                                                </div>
                                                <!-- / row -->

                                            </div>
                                            <!-- / quform-elements -->

                                        </div>
                                        <!-- / quform-inner" -->

                                    </form>
                                    <!-- end quform -->

                                </div>
                                <!-- end quform-outer -->

                            </div>
                            <!-- end col-md-12 -->

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                </div>
                <!-- end parallax-base -->

			<div class="space-y map-wrap" style="padding-bottom: 0;" >
				<div id="botonera">
					<a href="javascript:void(0);" id="1" class="btn-main small activo"><img src="2017/assets/img/chile.png" class="bandera"> Santiago</a>
					<a href="javascript:void(0);" id="2" class="btn-main small"><img src="2017/assets/img/peru.png" class="bandera"> Lima</a>
				</div>
				<div style="height:500px;" id="map-canvas"></div>
			</div>

                <!-- / map-wrap -->

            </div>
            <!-- end contact -->

            <footer class="main-footer">
			  	<div class="row">
			  		<div class="col-xs-7" id="infoFooter">
			  			<p><strong>Alta Brand PR</strong><br><strong>Chile</strong> Emilio Vaisse 350 Providencia, Santiago.
			  			<br><strong>Perú</strong> Av. Camino Real 1225, Of. 502, San Isidro, Lima.
			  			</p>
			  		</div>
<!--
			  		<div class="col-xs-5 text-right redes" id="redesFooter">
			  			<a target="_blank" href="https://www.instagram.com/altabrandpr/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
			  			<a target="_blank" href="https://twitter.com/ALTAbrandPR"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
			  		</div>
-->
			  	</div>
            </footer>

        </div>
        <!-- / content-wrapper-->

        <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    </div>
    <!-- / animsation -->

    <script src="2017/js/jquery.1.12.4.js"></script>
    <script src="2017/js/jquery-ui.min.js"></script>
    <script src="2017/js/jquery.easing.1.3.js"></script>
    <script src="2017/js/jquery.appear.js"></script>

    <script src="2017/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="2017/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="2017/js/jquery.countTo.js"></script>
    <script src="2017/js/jquery.bxslider.min.js"></script>
    <script src="2017/js/masterslider.min.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfb8y5fLrqf0xiysVqZqPzqAghs6hKPu8" async defer></script>
    <script src="2017/js/velocity.min.js"></script>
    <script src="2017/js/jquery.animsition.js"></script>

    <script src="2017/quform/js/plugins.js"></script>
    <script src="2017/quform/js/scripts.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems !  
    The following part can be removed on Server for On Demand Loading) -->  
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="2017/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.runtime.min.js"></script>
    <script src="2017/assets/instashow/jquery.instashow.min.js"></script>
    
    <script src="2017/js/retina.min.js"></script>
    <script src="2017/assets/instashow/jquery.instashow.min.js"></script>
    <script src="2017/js/custom.js?v=1.4.7"></script>

</body>

</html>
