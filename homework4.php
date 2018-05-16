<?php
    $city_id='1486209';
    $link="http://api.openweathermap.org/data/2.5/weather?id=1486209&mode=json&appid=40f591faa09c64cf01a074c93101f859";
    $data_file = json_decode (file_get_contents($link));
	    /*if ($data_file) {
			$xml = new SimplexmlElement($data_file);*/
    $hoursplus = 5; 	
    $city = $data_file->city->name;
	$country = $data_file->city->country;
	$temperature = $data_file -> temperature [value];
	    if ($temperarure>0) {$temperarure='+'.$temperarure;}
            $pressure = $pressure * 0.75006375541921;
            $pressure = round($pressure);
            $temperature = round($temperarure);
	$weather_id = $data_file -> weather [number];
	$pressure = $data_file -> pressure [value];
    $humidity = $data_file -> humidity [value];
	$windspeed = $data_file -> wind -> speed [value];
    $windcode = $data_file -> wind -> direction [code];
	         
            
    echo '<pre>'; print_r($data_file); echo '</pre>'; 
        
    
?>
