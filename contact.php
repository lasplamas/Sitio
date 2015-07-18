<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Balneario Las Palmas - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contacto">
    <meta name="author" content="balneario las palmas">

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



    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	<script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pageBody">
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59274310-1', 'auto');
	  ga('send', 'pageview');

	</script>
<div id="decorative2">

	<?php include('header.php'); ?>

</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.php">Inicio</a> &nbsp;/&nbsp; <span>Contacto</span>
            </div>

        <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Tu opinión es Importante!!!</h1>
                   	<h3 style="color:#FF6633;"></h3>
			<p>Mándanos tus opiniones, quejas o sugerencias a nuestro correo, nos interesa mejorar para que tengas una mejor experiencia.</p>

					<hr>
			<!--Start Contact form -->
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>

	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Nombre" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Correo" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comentarios"></textarea>
    <div class="actions">
	<input type="submit" value="Manda tu mensaje" name="submit" id="submitButton" class="btn btn-info pull-right" title="Manda tu mensaje!!!" />
	</div>

	</fieldset>
</form>
			<!--End Contact form -->
                </div>

			<!--Edit Sidebar Content here-->
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contacto</h3>
                    <p>
                        <address><strong>Balneario Las Palmas</strong><br />
                        Calle Independencia #8A<br />
                        Fresnillo, Zac<br />
			Atiende: Soledad Mier<br />
                        <abbr title="Phone">Celular:</abbr> 52+ 493 100 5811</address>
                        <abbr title="Phone">Oficina:</abbr> 52+ 493 932 0960 </address><br/>
			Horarios: <p>9:00 am a 2:00 pm lunes a sábados.</p>
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:#">blp.rgp@gmail.com</a></address>
                    </p>

					 <!-- Start Side Categories -->
        <h4 class="sidebox-title">Tipos de reservaciones:</h4>
        <ul>
          <li><a href="#">Cabañas de Lunes a Domingo</a></li>
          <li><a href="#">Albercas, Lunes y Martes</a></li>
          <li><a href="#">Áreas recreativas, Lunes a Domingo</a></li>
          <li><a href="#">Campamento, Miércoles a Domingo</a></li>
          <li><a href="#">Restaurante Miércoles a Domingo</a></li>
        </ul>
					<!-- End Side Categories -->

                    </div>



                </div>
			<!--/End Sidebar Content-->


            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <?php include('footer.php'); ?>
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/index.js" type="text/javascript"></script>



</body>
</html>
