<html>
<body>
<style>
    .box{
        border: 1px solid #aaa; /*getting border*/
        border-radius: 4px; /*rounded border*/
        color: #000; /*text color*/
    }
</style>
</Body>
</html>
<?php
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    $QueryKey = $_GET['key'];
    $QueryState = $_GET['state'];
    $QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/".$QueryKey."/geolookup/conditions/q/" .$QueryState. "/" .$QueryCity. ".json");
    $json_a = json_decode($json_string);

        //pencarian variabel
    $a1 = $json_a->{"location"}->{"type"};
	 $a2 = $json_a->{"location"}->{"country"};
      $a3 = $json_a->{"location"}->{"city"};
       $a4 = $json_a->{"location"}->{"zip"};
        $a5 = $json_a->{"current_observation"}->{"local_time_rfc822"};

     $b1 = $json_a->{"current_observation"}->{"temperature_string"};
      $b2 = $json_a->{"current_observation"}->{"wind_string"};
       $b3 = $json_a->{"current_observation"}->{"dewpoint_string"};
        $b4 = $json_a->{"current_observation"}->{"heat_index_string"};
         $b5 = $json_a->{"current_observation"}->{"windchill_string"};
          $b6 = $json_a->{"current_observation"}->{"visibility_km"};

   
        //eksekusi variabel
	echo "Type : ${a1}\n";
    echo "<br>";
    echo "Country : ${a2}\n";
    echo "<br>";
    echo "City : ${a3}\n";
    echo "<br>";
    echo "Code Zip : ${a4}\n";
    echo "<br>";
    echo "Local Time : ${a5}\n";
    echo "<br>";
    echo "Temperature : ${b1}\n";
    echo "<br>";
    echo "Wind : ${b2}\n";  
    echo "<br>";
    echo "DewPoint : ${b3}\n";
    echo "<br>";
    echo "Heat Index : ${b4}\n";
    echo "<br>";
    echo "WindChill : ${b5}\n";
    echo "<br>";
    echo "Visibility : ${b6}\n";

?>