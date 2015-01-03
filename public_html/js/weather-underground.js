//Get Weather Conditions in Catonsville

  $.ajax({
	  url : "http://api.wunderground.com/api/55eb940d4ca730b8/geolookup/conditions/q/MD/Catonsville.json",
	  dataType : "jsonp",
	  success : function(parsed_json) {
		  var location = parsed_json['location']['city'];
		  var temp_f = parsed_json['current_observation']['temp_f'];
		  var humidity = parsed_json['current_observation']['relative_humidity'];
		  var condition = parsed_json['current_observation']['weather'];
		  console.log("Current temperature in " + location + " is: " + temp_f + " Humidity is " + humidity + " weather condition is " + condition);

		  document.getElementById("location").innerHTML = location;
		  document.getElementById("temp").innerHTML = temp_f;
		  document.getElementById("condition").innerHTML = condition;
	  }
  });


