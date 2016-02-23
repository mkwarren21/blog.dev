<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/weather_map.css">
	<title>Weather Wizard</title>
</head>
<body>
	<h1>3 Day Forecast</h1>
	<form id="search-form">
		<input id="zipcode" name="zipcode" type="text" placeholder="City Name or Zipcode">
		<input type="submit" value="Search">
	</form>
	<h3 id = "cityname"></h3>
		
	<div class="boxes">
		<div id = "weather"></div>
	       
		<div id = "map-canvas"></div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg39XgzWGOdHHBvzjb_xN9gfWswGfRwXE"></script>
	<script src = "/js/moment.js"></script>
	<script src ="/js/weather_map.js"></script>


</body>
</html>