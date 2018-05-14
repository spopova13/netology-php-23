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
		
/**	$result = [];
        foreach ($continents as $animals) {
            $result = array_merge($result, array_filter($animals, function ($item){ 
			    return count(explode(' ', $item)) === 2; 
			    }
		    ) 
	    );
    }
        print_r($result);**/
		
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
	

/**var_dump($continents ['Africa']);
    echo '<pre>';**/
	
?>