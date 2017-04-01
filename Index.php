<html>
	<head>
	<title>WEATHER APP</title>
	<h2>Weather Api Estimasi</h2>
	</head>
	
	<body>
	
	<form class="navbar-form pull-right">
		<input class="span2" name="key" type="text" placeholder="Key">
        <input class="span2" name="city" type="text" placeholder="City">
        <input class="span2" name="state" type="text" placeholder="State / Providence">
        <button type="submit" class="btn btn-success">Result</button>
    </form>
    input Exampel <br></br>
    key = a657d7d2ba430b38, City = Cedar Rapids, State = IA
    <br></br>
	</body>
</html>
<?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>