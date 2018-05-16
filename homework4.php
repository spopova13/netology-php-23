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
        
    /*function xml_attribute($object, $attribute) { //функция для извлечения атрибута XML
        if (isset($object[$attribute])) return (string) $object[$attribute];
    }		
	/*$longitude = round($xml_attribute($xml->location->location, 'longitude'),2);
	$latitude = round($xml_attribute($xml->location->location, 'latitude'),2);
    
    
    $weather_icon = $xml -> weather [icon];
    $weather_type = $xml -> weather [value];
    
    $sunrise = $xml -> city -> sun [rise];
    $sunset = $xml -> city -> sun [set];
    

        
            $sunrise = date('H:i',strtotime("+5 hours", strtotime($sunrise)));
            $sunset = date('H:i',strtotime("+5 hours", strtotime($sunset)));

    $title = "Город: ".$city."\n".
    $weather_type." \nДавление: ".$pressure." мм рт. ст.\nВетер: ".$wind[trim ($windcode)].", ".$windspeed." м/с \nВлажность: ".$humidity."% \nВосход: ".$sunrise."\nЗакат: ".$sunset;//формируем данные для вывода в title картинки
        echo ("<img src=C:\Users\Svetlana\Downloads\city.list.json/$weather_icon.png\" alt=\"$weather_type\" title=\"$title\" >"); //путь к кртинкам должен быть абсолютным
        echo ("$temperarure<sup>o</sup>C<br>");//выводим все безобразие
		
		http://api.openweathermap.org/data/2.5/weather?id=1486209&mode=xml&appid=40f591faa09c64cf01a074c93101f859
		*/









?>