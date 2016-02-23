"use strict";

var mapOptions = {
    zoom: 10,
    center: {
        lat:  29.4404731,
        lng: -98.5006328 
    }

};
var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//("#map-canvas".get(0)), instead of get element by id
var geocoder = new google.maps.Geocoder();
var address = "78212";

function mapping(address){

    geocoder.geocode({ "address": address }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var lat = results[0].geometry.location.lat();
			var lng = results[0].geometry.location.lng();
			ajaxing(lat,lng);
           
        } else {
           alert("Geocoding was not successful - STATUS: " + status);
        }	
	});
};


function ajaxing(lat, lng){
	var request = $.get("http://api.openweathermap.org/data/2.5/forecast/daily",{
		APPID: "814cb72ff800f798e341072a5ed9893e",
		lat: lat,  
		lon: lng,
		units: "imperial",
		cnt: 3
	});

	request.fail(function(data){
		console.log("Good try. Try again.")
	})
	request.done(function(data){
		console.log(data);
		var weather = "";
		var icon;
		var conditions;

		data.list.forEach(function(day){
			icon = (day.weather[0].icon);
			conditions = day.weather[0].description;


			weather += "<div class='col-sm-3 col-lg-3 col-md-3 box'>"
			weather += "<div class='icon' style='background-image: url(http://openweathermap.org/img/w/"+icon+".png')'></div>";
			weather += "<div class='caption'><h4 class='pull-right'>" + Math.round(day.temp.max) + "/" + Math.round(day.temp.min) + "°F</h4>";
			weather += "<h4>" + moment.unix(day.dt).format("dddd") +"</h4>";
			weather += "<p>" + conditions.toUpperCase() + "</p>";
			weather += "<p>Wind Speed: " + parseInt(day.speed) + " mph</p>";
			weather += "<p>Humidity: " + day.humidity + "</p>";
			weather += "<p>Pressure: " + day.pressure+ "</p></div></div>";
			
			$("#weather").html(weather);
			$("#cityname").html(data.city.name);
		});	
	});
}

//this sets the address so that the map can run first then it will recenter it


$("#search-form").submit(function(e) {
	console.log(e);
	e.preventDefault();
	address = $("#zipcode").val();
	mapping(address);

});

mapping(address);
ajaxing(29.4404731, -98.5006328);
