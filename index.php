<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Balneario Las Palmas -  Bienvenido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->
    
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

<link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <!---<a href="index.html" id="divSiteTitle"><img src="images/logo.png" alt="Site Name" title="Site Name" /></a>-->
		        <a href="index.html" id="divSiteTitle">Balneario Las Palmas</a><br />
                        <a href="index.html" id="divTagLine">La mejor experiencia 100% familiar</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            MENÚ <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="index.php">Inicio</a></li>
								<li class="dropdown"><a href="about.html">Precios</a></li>
                                <!------------<li class="dropdown">
                                    <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                            <li><a href="full.html">Full Page</a></li>
                            <li><a href="2-column.html">Two Column</a></li>
                            <li><a href="3-column.html">Three Column</a></li>
							<li><a href="../documentation/index.html">Documentation</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            </ul>
                            </li>
                            </ul>
                                </li>------->
				<li class="dropdown"><a href="index.php">Ubicación</a></li>
                                <li class="dropdown"><a href="promo.php">Promociones</a></li>
                                <li class="dropdown"><a href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">

                        <div id="headerSeparator"></div>

                        <div id="divHeaderText" class="page-content">
                            <div id="divHeaderLine1">Ambiente 100% familiar!</div><br />
                            <div id="divHeaderLine2">Ven y conoce nuestras instalaciones...</div><br />
                            <div id="divHeaderLine3"><a class="btn btn-large btn-primary" href="#">Más...</a></div>
                        </div>

                        <div id="headerSeparator2"></div>

                </div>
            </div>

        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">

                <div class="span12" id="divMain">

                    <h1>Bienvenido</h1>

                    <p><b>Baleario Las Palmas</b> es una empresa cuyo obejetivo principal es el excelente servicio al cliente. 
                    Una empresa que por <b>más de 20 años</b>, se ha encargado de mantener dentro de sus instalaciones un <b>ambiente 100% familiar</b>.
                    Nos encargaremos de que tu familia se la pase de lo mejor en nustras bellas instalaciones.
                    </p>

                    <hr style="margin:45px 0 35px" />

                    <div class="lead">
                        <h2>Hermosas instalaciones.</h2> 
                        <h3>Convive con tu familia y amigos en un nuestras increíbles instalaciones.</h3>
                    </div>
                    <br />

                    <div class="list_carousel responsive">
                        <ul id="list_photos">
			  <?php
			     for( $i=0; $i<8; $i++ ){
			     print( "<li><img src='images/instalaciones/foto".$i.".jpg' class='img-polaroid'>  </li>^M" );
			     }
			  ?>
			</ul>
                    </div> 
					
                    <hr style="margin:45px 0 35px" />
                    
                    <div class="lead">
                        <h2>Featured Content.</h2> 
                        <h3>Content on this page is for presentation purposes only.</h3>
                    </div>
                    <br />

                    <div class="row-fluid">
                        <div class="span8">

                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>         

                            <p>
                                <img src="images/spring-is-coming.jpg" class="img-polaroid" style="margin:12px 0px;">  
                            </p>
							
                            <p>Content on this page is for presentation purposes only. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                                                                                       
                        </div>
                        <div class="span4 sidebar">

                            <div class="sidebox">
                                <h3 class="sidebox-title">Sample Sidebar Content</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>                       
                            </div>

                            <br />

                            <div class="sidebox">
                                <h3 class="sidebox-title">Sample Sidebar Content</h3>
                                <p>
                                    <div class="input-append">
                                        <input class="span8" id="inpEmail" size="16" type="text"><button class="btn" type="button">Action</button>
                                    </div>
                                </p>                      
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>Acerca de la Compañía</h3>

                    <p>Balneario Las Palmas es una empresa dedicada por más de 20 años al excelente servicio en parques acuáticos.</p>
                    
                    <p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>

                </div>
                <div class="span3" id="footerArea2">

                    <h3>Recent Blog Posts</h3> 
                    <p>
                        <a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
                        <span style="text-transform:none;">2 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Duis mollis, est non commodo luctus</a><br />
                        <span style="text-transform:none;">5 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Maecenas sed diam eget risus varius</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">VIEW ALL POSTS</a>
                    </p>

                </div>
                <div class="span3" id="footerArea3">

                    <h3>Sample Content</h3> 
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s. 
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Get in Touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Teléfono:</span>
                        <br />
                        52+ 493 114 3334                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="blp.rgp@mail.com" title="Email">blp.rgp@mail.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Dirección de Oficinas:</span>
                        <br />
                        Calle de la Rueda<br />
                        Colonia Centro<br />
                        Fresnillo, Zacatecas
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2014 Balneario Las Palmas. Todos Los Derechos Reservados.
                    </p>

                    <p class="social_bookmarks">
                        <a href="https://www.facebook.com/pages/Balneario-Las-Palmas-Fresnillo/286428891516787?fref=ts"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
			<a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
			<a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>


</body>
</html>
