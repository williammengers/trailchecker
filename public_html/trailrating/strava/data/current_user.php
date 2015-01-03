<html ng-app>
  <?php

  $code = $_GET['code'];
  $client_id = 4032;
  $client_secret = fc1e40d0fab7233b190039e09845c74d7e4c1361;

  // First, include Requests
  include('../library/Requests.php');

  // Next, make sure Requests can load internal classes
  Requests::register_autoloader();

  // Now let's make a request!
  $request = Requests::post('https://www.strava.com/oauth/token', array(), array('client_id' => $client_id, 'client_secret' => $client_secret, 'code' => $code));
  $request = json_decode($request->body, true);
  $firstname = $request["athlete"]["firstname"];
  $prof_pic = $request["athlete"]["profile_medium"];

  //echo "<h3><img src='" . $prof_pic . "' /> Welcome " . $firstname . "</h3>";

    //Get access token for API calls
    $token = $request["access_token"]; 
    //echo $token;
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

  ?>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!--Main Custom CSS-->
  <link rel="stylesheet" href="http://patapscotrails.com/css/boot-override.css">

  <!--jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--Sugar JS Library -->
  <script type="text/javascript" src="http://sugarjs.com/release/current/sugar.min.js"></script>

  <!--Google map api libraries-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRl0i5r3GD1rT-txrY-kuGVRv4oFmXxVE"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>

  <!--Google Maps Custom JS-->
  <script type="text/javascript" src="http://patapscotrails.com/js/google-maps.js"></script>
  <!--Weather Underground API JS-->
  <script type="text/javascript" src="http://patapscotrails.com/js/weather-underground.js"></script>

  <!--AngularJS-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.min.js"></script>

  <div class="welcome">
    <h3><img src=<?php echo $prof_pic ?> /> Welcome <?php echo $firstname ?></h3>
  </div>
  
  <div class = "current-conditions">
    <p><span id="temp"></span> degrees in: <span id="location"></span> and <span id="condition"></span></p>
  </div> 

  <!--Map Canvas -->
  <div id="map-canvas"></div>


<div class="partners">
  <img class="strava-logo" src="http://static.wixstatic.com/media/b8996d_3f7bb0592e144f33bca92d6daa2bb4a8.png" />
  <img class="wu-logo" src="http://icons.wxug.com/i/w/layout/logo-responsive.png" />
</div>
</html>


