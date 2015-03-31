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
   <?php include('header.php');?>
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
			     print( "<li><img src='images/instalaciones/foto".$i.".jpg' class='img-polaroid'>  </li>" );
			     }
			  ?>
			</ul>
                    </div>

                    <hr style="margin:45px 0 35px" />

                    <div class="lead">
                        <h2>Excelente servicio familiar.</h2>
                        <h3>Disfruta nuestros excelentes servicios</h3>
                    </div>
                    <br />

                    <div class="row-fluid">
                        <div class="span8">

                            <h3></h3>

                            <p>
                                <img src="http://i.imgur.com/vYVkJsJ.jpg" class="img-polaroid" style="margin:12px 0px;">
                            </p>

                            <p>Balneario Las Palmas es  un lugar de recreación y diversión familiar, el cual se encuentra sobre una de las zonas más bellas del estado de Zacatecas. Balneario Las Palmas le proporciona un ambiente familiar de paz y armonía con la naturaleza.

                            </p>

                        </div>
                        <div class="span4 sidebar">

                            <div class="sidebox">
                                <h3 class="sidebox-title">Nuestros Servicios</h3>
                                <p>	Albercas con tobogán<br />
					Dulcerías<br />
					Restaurante<br />
					Farmacia<br />
					Enfermería<br />
				</p>
                            </div>

                            <br />

                        </div>
                    </div>

                </div>

            </div>

        <div id="footerInnerSeparator"></div>
    </div>

	</div>

	<div id="footerOuterSeparator"></div>

	<div id="divFooter" class="footerArea">

	    <?php include 'footer.php';?>

	</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>


</body>
</html>
