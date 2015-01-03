<?php
	$code = $_GET['code'];
	if($code){
		header("Location: http://patapscotrails.com/trailrating/strava/data/current_user.php?code=" . $code);
	}

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<style>
	.home-center{
		margin-left: 18%;
		margin-top: 8%;
		z-index: 1000;
	}
	.home-center p{
		float: none;
		margin-left: 5%;
	}
	.home-center a{
		float: none;
		margin-left: 10%;
	}

	body {
	  /* Location of the image */
	  background-image: url('http://gallsource.com/wp-content/uploads/2014/09/Mountain-Biking-Beautiful-Pics.jpg') !important;
	  
	  /* Background image is centered vertically and horizontally at all times */
	  background-position: center center !important;
	  
	  /* Background image doesn't tile */
	  background-repeat: no-repeat !important;
	  
	  /* Background image is fixed in the viewport so that it doesn't move when 
	     the content's height is greater than the image's height */
	  background-attachment: fixed !important;
	  
	  /* This is what makes the background image rescale based
	     on the container's size */
	  background-size: cover !important;
	  
	  /* Set a background color that will be displayed
	     while the background image is loading */
	  background-color: #464646 !important;
	}

</style>
<body>
	<div class="home-center">
		<h1>Off Camber Trail Ratings</h1>

			<p>Login to your Strava Account to get started:</p>

			<a href="https://www.strava.com/oauth/authorize?client_id=4032&response_type=code&redirect_uri=http://patapscotrails.com&scope=write&state=mystate&approval_prompt=auto">
				<img src= "/img/LogInWithStrava.png" />
		</a>
	</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58159689-1', 'auto');
  ga('send', 'pageview');

</script>
</body>