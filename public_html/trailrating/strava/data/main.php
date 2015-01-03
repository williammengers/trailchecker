<?php

//Get user Code, Client Id, and Client Secret for Strava API
$code = $_GET['code'];
$client_id = 4032;
$client_secret = fc1e40d0fab7233b190039e09845c74d7e4c1361;

// First, include HTTP Requests Library
include('../library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

// Now let's make a request!
$request = Requests::post('https://www.strava.com/oauth/token', array(), array('client_id' => $client_id, 'client_secret' => $client_secret, 'code' => $code));
$request = json_decode($request->body, true);

//Bucket firstname and profile pic
$firstname = $request["athlete"]["firstname"];
$prof_pic = $request["athlete"]["profile_medium"];

echo "<h3><img src='" . $prof_pic . "' /> Welcome " . $firstname . "</h3>";

  //Get access token for API calls
  $token = $request["access_token"]; 
  //echo $token;
   
  //Strava API functions
  function getAthlete($token){ 
      $athlete = Requests::get('https://www.strava.com/api/v3/athlete?access_token=' . $token, array('Accept' => 'application/json'));
      $athlete = json_decode($athlete->body, true);

    return $athlete;
   }//getAthlete

  function getFriends($token){
      $friends = Requests::get('https://www.strava.com/api/v3/athlete/friends?access_token=' . $token, array('Accept' => 'application/json'));
      $friends = json_decode($friends->body, true);

    return $friends;
  }//getFriends

  function popularSegments($token){
    $popSegments = Requests::get('https://www.strava.com/api/v3/segments/explore?access_token=' . $token . '&bounds=39.204881,-76.784399,39.281192,-76.712644', array('Accept' => 'application/json'));
    $popSegments = json_decode($popSegments->body, true);

    $seg_length = count($popSegments);
    $popSegments = $popSegments["segments"][0]["name"];
    
    for($i=0;$i<=$seg_length;$i++){
      $segment_array[] = $popSegments["segments"][$i]["name"];

    }
    return $segment_array;

  }//popularSegments
*/
//Get info on current user using functions
$currAthlete = getAthlete($token);
$currFriends = getFriends($token);
$currSegments = popularSegments($token);

echo "<h3>Popular Segments in your area:</h3>";
var_dump($currSegments);

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Bootstrap Override -->
<link rel="stylesheet" href="http://patapscotrails.com/css/main.css">

<!--jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--Google map api libraries-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRl0i5r3GD1rT-txrY-kuGVRv4oFmXxVE"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>

<!-- Custom JS -->
<script src="http://patapscotrails.com/js/maps.js"></script>

<div id="map-canvas"></div>
<div id="location-form">
	<h3>Enter Trail Conditions</h3>
</div>

