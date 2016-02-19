<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/leaflet.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<title>US STARTUP MAP</title>
</head>
<body>
	<div id="wrapper">	
		<!-- MAIN NAVBAR -->
		<nav>
			<div id="logo-left">
				<h1>THE BIG STARTUP MAP</h1>
			</div>

			<div class="navigation-links">
				<a href="#heatmap">MAP</a>
				<a href="#visual">GRAPHS</a>
				<a href="#map">COMPANIES &amp; FUNDING</a>
			</div>
		</nav> <!-- END OF NAVBAR -->

		<!-- MAIN HERO SECTION -->
		<div class="hero">
			<h1>THE BIG STARTUP MAP</h1>
			<p>The following site contains a visual representation of the growth of the startup ecosystem around the United States over the last 50 years, until today.</p>
			<div class="hero-button">
				<a href="#heatmap">GO TO MAP</a>
			</div>
		</div> <!-- END OF HERO -->

		<!-- HEATMAP -->
		<div id="heatmap">
			<div class="map-headline">
				<p>The following heatmap represents the accumulation of US Startups worth over $10M USD over the last 50 years.</p>
			</div>
			<iframe width="100%" height="800px" frameborder="0" src="https://savi.cartodb.com/u/jplata/viz/c9df8122-d294-11e5-9cfd-0e5db1731f59/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
		</div> <!-- END OF HEATMAP -->
		
		<!-- GRAPHS -->
		<div id="visual">
			<h1> GRAPHS AND FACTS </h1>
			<div class="column">
				<img src="images/numbers.png" alt="numbers">
				<h2>Total number of companies:</h2>
				<h3><em>13028</em></h3>
			</div>
			<div class="column">
				<img src="images/fundingrounds.png" alt="numbers">
				<h2>Funding Rounds Trend</h2>
				<h3><em>Peak around 2000's</em></h3>
			</div>
			<div class="column">
				<img src="images/scatterplot.png" alt="numbers">
				<h2>Founded date &amp; City</h2>
			</div>
		</div><!-- END OF GRAPHS -->

		<!-- HEATMAP -->
		<div id="map"> 
		</div> <!-- END OF HEATMAP -->
	</div> <!-- END OF WRAPPER -->

	<footer>
		<p>All info found on this page is used with permission of &copy; CrunchBase</p>
		<a href="https://github.com/platypause/startup_map" target="_blank"><i class="fa fa-github fa-2x"></i></a>
	</footer>

	<!-- MAIN SCRIPTS / JQUERY, LEAFLET AND MAP SCRITPS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/leaflet.js"></script>
	<script src="js/main.js"></script>
	<script src="js/startupMap.js"></script>
	<!-- END OF SCRIPTS -->
</body>
</html>

