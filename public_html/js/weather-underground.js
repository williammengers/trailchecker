  $.ajax({
	  url : "http://api.wunderground.com/api/55eb940d4ca730b8/geolookup/conditions/q/IA/Cedar_Rapids.json",
	  dataType : "jsonp",
	  success : function(parsed_json) {
		  var location = parsed_json['location']['city'];
		  var temp_f = parsed_json['current_observation']['temp_f'];
		  console.log("Current temperature in " + location + " is: " + temp_f);
	  }
  });