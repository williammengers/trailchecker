<?php
	$code = $_GET['code'];
	if($code){
		header("Location: http://patapscotrails.com/trailrating/strava/data/current_user.php?code=" . $code);
	}

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- will use self hosted bootstrap css at a later time -->
<link rel="stylesheet" type"text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- will use sass at a later time as well, for now we will use this main stylesheet -->
<link rel="stylesheet" type"text/css" href="css/style.css">
<body>
<section class="home">
	<div class="container">
		<header>
			<nav class="navbar navbar-default">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">BRAPP</a>
		    </div>
		    <ul class="nav navbar-nav">
	        <li><a href="#">About</a></li>
	        <li><a href="#">Tour</a></li>
	        <li><a href="#">Sign Up</a></li>
		    </ul>
			</nav>
		</header>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="jumbotron">
				  <h1>Less Chattin' | More Brappin</h1>
				  <p>Getting local trail reports has never been so simple.</p>
				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>
			<div>
			<div class="col-md-6">
				<figure>
					<img src="img/intro-hand-mobile.png" alt="mobile phone being held by person using BRAPP application" />
				</figure>
			</div>
		</div>
	</div>
</section>
<section class="row about">
  <div class="container">
  	<div class="col-md-4">
  		<figure>
			  <img src="img/about-bike.gif" alt="">
			  <figcaption>
			  	<h2>For Riders / By Riders</h2>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			  </figcaption>
			</figure>
  	</div>
  	<div class="col-md-4">
  		<figure>
			  <img src="img/about-location.gif" alt="">
			  <figcaption>
			  	<h2>Location, Location, Location</h2>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			  </figcaption>
			</figure>
  	</div>
  	<div class="col-md-4">
  		<figure>
			  <img src="img/about-strava.gif" alt="">
			  <figcaption>
			  	<h2>Strava Integration</h2>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			  </figcaption>
			</figure>
  	</div>
	</div>
</section>
<section class="row explore">
  <div class="container">
		<h3>Explore New Trails</h3>
		<p>Out of town on a business trip or visting relatives in a foreign country? BRAPP helps you find nearby trails that are rated by local enthusiasts just like yourself.</p>
	</div>
</section>
<section class="row getstarted">
  <div class="container">
	
</section>
<section class="row footer">
  <div class="container">
	
</section>


		

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58159689-1', 'auto');
  ga('send', 'pageview');

</script>
</body>