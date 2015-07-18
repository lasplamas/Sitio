<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Balneario Las Palmas - Ubicación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ubicacion">
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

	<style>
		#map-canvas {
			width: auto;
			height: 400px;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<script>

	function initialize() {
		var mapCanvas = document.getElementById('map-canvas');
		var mapOptions = {
			  center: new google.maps.LatLng(23.3432311, -102.9402745),
			  zoom: 14,
			  mapTypeId: google.maps.MapTypeId.SATELLITE
		}
		var map = new google.maps.Map(mapCanvas, mapOptions)
		var loc = [
  			['Balneario Las Palmas', 23.3432311, -102.9402745, 4]
		];
		setMarkers(map, loc);
	}

	function setMarkers(map, locations) {
		// Add markers to the map

		// Marker sizes are expressed as a Size of X,Y
		// where the origin of the image (0,0) is located
		// in the top left of the image.

		// Origins, anchor positions and coordinates of the marker
		// increase in the X direction to the right and in
		// the Y direction down.
		var image = {
		url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png',
		// This marker is 20 pixels wide by 32 pixels tall.
		size: new google.maps.Size(20, 32),
		// The origin for this image is 0,0.
		origin: new google.maps.Point(0,0),
		// The anchor for this image is the base of the flagpole at 0,32.
		anchor: new google.maps.Point(0, 32)
		};
		// Shapes define the clickable region of the icon.
		// The type defines an HTML &lt;area&gt; element 'poly' which
		// traces out a polygon as a series of X,Y points. The final
		// coordinate closes the poly by connecting to the first
		// coordinate.
		var shape = {
		coords: [1, 1, 1, 20, 18, 20, 18 , 1],
			type: 'poly'
		};
		for (var i = 0; i < locations.length; i++) {
			var beach = locations[i];
			var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: image,
				shape: shape,
				title: beach[0],
				zIndex: beach[3]
			});
		}
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
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
    <?php include('header.php');?>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.php">Inicio</a> &nbsp;/&nbsp; <span>Ubicación</span>
            </div>

        <div class="row-fluid">

			<!--Edit Sidebar Content here-->
                <div class="span3">
                 <h3>Encuentranos en...</h3>
                 <p>Carretera Torreón kilómetro 5</p>
                 <p>Fresnillo Zacatecas</p>

          <img src="http://i.imgur.com/D1ZBsCD.jpg" class="img-polaroid" alt="">

		<h3>Oficina</h3>
                <p>Calle Independencia #8A</p>
                <p>Colonia Centro</p>
                <p>Fresnillo Zacatecas</p>

	</div>
				<!--/End Sidebar Content -->

            	<!--Edit Main Content Area here-->
                <div class="span9" id="divMain">

                    <h1>Mapa</h1>
					<hr>

			<div id="map-canvas"></div>
		</div>

		<!--/End Main Content Area here-->


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




</body>
</html>
