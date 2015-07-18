<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Balneario Las Palmas - Promociones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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

	<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /><link href="scripts/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

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
                <a href="index.php">Inicio</a> &nbsp;/&nbsp; <span>Promociones</span>
            </div>

        <div class="row-fluid">
                <div class="span12">

                    <h1>Promociones</h1>

                    <div id="gridArea">
                        <ul id="tiles">
                        <?php
				$promos = array();
				array_push( $promos, array(
					'title' => 'Semana Santa',
					'image' => 'http://i.imgur.com/ZOKkcpA.jpg',
					'date' => 'Válido 30 de marzo a 5 de abril',
					'author' => 'descuento',
					'description' => 'Ahora en semana santa <b>adultos 50 y niños 25</b>!!!'
				));
				array_push( $promos, array(
					'title' => 'Día del niño',
					'image' => 'http://i.imgur.com/P97h2Cl.jpg',
					'date' => 'Válido 30 de marzo a 5 de abril',
					'author' => '2X1',
					'description' => 'Ahora en semana santa niños entran dos por uno!!!'
				));
				array_push( $promos, array(
					'title' => 'Día de la madre',
					'image' => 'http://i.imgur.com/jEG5jD1.jpg',
					'date' => 'Válido 10 de mayo',
					'author' => 'gratis',
					'description' => 'Madres entran GRATIS!!!'
				));
				array_push( $promos, array(
					'title' => 'Día del padre',
					'image' => 'http://i.imgur.com/xOXEMtT.jpg',
					'date' => 'Válido 21 de junio',
					'author' => 'gratis',
					'description' => 'Padres entran GRATIS!!!!'
				));
				array_push( $promos, array(
					'title' => 'Día del estudiante',
					'image' => 'http://i.imgur.com/09Gw0XU.jpg',
					'date' => 'Válido 23 de mayo',
					'author' => '2X1',
					'description' => 'Estudiantes entran 2X1'
				));

				foreach( $promos as $p ){
					print( '<li>' );
					print( '<a href="'.$p['image'].'" title="Sticky" rel="prettyPhoto[gallery1]">' );
					print( '<img src="'.$p['image'].'" alt="Sticky" title="Sticky"/></a>' );
					print( '<div class="meta"><span>'.$p['date'].'</span><span class="pull-right">'.$p['author'].'</span></div>' );
					print( '<h4><a href="#">'.$p['title'].'</a></h4>' );
					print( '<p>'.$p['description'].'</p>' );
					print( '</li>' );
				}
			   ?>

                        </ul>
                    </div>

                </div>
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <?php include('footer.php');?>

</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/index.js" type="text/javascript"></script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script><script src="scripts/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script><script type="text/javascript">$("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});$("a[rel^='prettyPhoto'] img").hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});</script>



</body>
</html>
