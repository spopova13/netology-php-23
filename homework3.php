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
        foreach($continents as $continent => $animals){
            foreach($animals as $animal){
                $all_animals= [];
                $anim = explode(' ', $animal);
                $all_animals[]=$anim;
     
        foreach($all_animals as $k){
            if(count($k) === 2){
                $mas = implode(",", $k);
                $str = str_replace(',', ' ', $mas);
                $result[]=$str;
            }
        }
            }
        }
 
echo '<pre>';
print_r($result);

    foreach($result as $name){
        $parts = explode(' ', $name);
        $first[] = $parts[0];
        $second[] = $parts[1];
    }

/*
echo '<pre>';
var_dump($first);
var_dump($second);
echo '<pre>';
*/

    $random_result_first = [];
        
		while (count($random_result_first) < count($result)){
            $proverka = $first[rand(0, count($result)-1)];
            if (!in_array($proverka, $random_result_first)) {
                array_push($random_result_first, $proverka);
            }
        }
 
//var_dump($random_result_first);
 
    $random_result_second = [];
 
        while (count($random_result_second) < count($result)){
            $proverka = $second[rand(0, count($result)-1)];
            if (!in_array($proverka, $random_result_second)) {
                array_push($random_result_second, $proverka);
            }
        }
 
//var_dump($random_result_second);
 
    $final_result = [];

        for($i = 0; $i < count($result); $i++){
            $final_result[]= $random_result_first[$i] . ' ' . $random_result_second[$i];  
        }
 
//var_dump($final_result);


echo '<pre>';
print_r($final_result);

	
    foreach ($continents as $continent => $animals) {
        echo '<h2>' . $continent, '</h2><br />';
        foreach ($animals as $key => $animal) {
            echo $animal . '<br />';
        }
    }

?>
