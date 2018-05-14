<?php
    $continents = [
	    'Africa' => ['Okapia johnstoni', 'Hexaprotodon liberiensis', 'Potamochoerus porcus'],
		'Europe' => ['Ovibos moschatus', 'Bubo bubo'],
        'Asia' => ['Arctictis binturong', 'Bucerotidae', 'Tapirus indicus'],
        'Australia' => ['Cacatuidae', 'Macropus', 'Vombatidae'],
        'South America' => ['Dasyprocta', 'Cingulata', 'Lama guanicoe'],
        'North America' => ['Ursus americanus', 'Antilocapra americana', 'Enhydra lutris'],
        'Antarctica' => ['Spheniscidae', 'Ommatophoca rossii', 'Physeter macrocephalus'],	
		
	];
	    echo '<pre>';
		print_r($continents);
		
    $result = [];
        foreach($continents as $continent => $animals) {
            foreach ($animals as $animal) {
                if (strpos($animal, ' ') !== false) {
                    array_push($result, $animal);
                    }
            }
        }
		
    print_r($result);
	/*shuffle($result);*/
	
    foreach ($continents as $continent => $animals) {
        echo '<h2>' . $continent, '</h2><br />';
        foreach ($animals as $key => $animal) {
            echo $animal . '<br />';
        }
    }
?>
