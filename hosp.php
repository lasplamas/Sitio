<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Balneario Las Palmas -  Bienvenido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->
	<link rel="shortcut icon" href="http://i.imgur.com/H40GDK2.png">
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

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.html">Inicio</a> &nbsp;/&nbsp; <span>Cabañas</span>
            </div>

        <div class="row-fluid">

		 <div class="span12" id="divMain">

		<hr />

                    <div class="lead">
                        <h2>Ahora con cabañas.</h2>
                        <h3>Convive con tu familia y amigos ahora en nuestras hermosas y rústicas cabañas.</h3>
                    </div>
                    <br />

                    <div class="list_carousel responsive">
                        <ul id="list_photos">
			  <?php
				$array_img = array(
					"http://i.imgur.com/OQ1bIpg.jpg",
					"http://i.imgur.com/ZDCdbb1.jpg",
					"http://i.imgur.com/cRnj7LJ.jpg",
					"http://i.imgur.com/D1ZBsCD.jpg"
				);
				foreach( $array_img as $i ){
					print( "<li><img src='".$i."' class='img-polaroid'>  </li>" );
				}
			  ?>
			</ul>
                    </div>

               	<hr style="margin:45px 0 35px" />

		</div>
			<!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <h1>Precios</h1>
					<hr>


			<div class="row-fluid">
		        <div class="span2">
                    <img src="http://i.imgur.com/AWamCyn.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>
                <div class="span10">
                    <h2>Cabaña grande tres habitaciones.</h2>
                </div>
            </div>

			<hr>

			<div class="row-fluid">
		        <div class="span2">
                    <img src="http://i.imgur.com/MHZ5hwX.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>
                <div class="span10">
                    <h2>Cabaña mediana dos habitaciones.</h2>
                </div>
            </div>
			<hr>

			<div class="row-fluid">
		        <div class="span2">
                    <img src="http://i.imgur.com/1ymQxOo.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>
                <div class="span10">
                    <h2>Cabaña chica una habitación.</h2>
                </div>
            </div>

			<hr>

			<div class="row-fluid">
		        <div class="span2">
                    <img src="http://i.imgur.com/FKYJen4.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>
                <div class="span10">
                    <h2>Acampa con tu familia ¡¡¡SIN COSTO!!!</h2>
                </div>
            </div>



                </div>

                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Reserva tu lugar ya!!!</h3>
                        <p>Reserva con nosotros y no dejes pasar la oportunidad.</p>

                        <h4 class="sidebox-title"></h4>
                          <ul>
                            <li><a href="contact.php">Reserva</a></li>
                          </ul>

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

<script src="scripts/index.js" type="text/javascript"></script>
<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>


</body>
</html>
