<?php
    $x = $_GET['x'];
	$a = 1;
	$b = 1;
	$c = 1;
	                while ($x) {
		    if ($a > $x) {
			    echo "Задуманное число НЕ входит в числовой ряд";
		        break;
			}elseif ($a == $x){
		        echo "Задуманное число входит в числовой ряд";
			    break;
            }elseif ($c = $a) { 
			    echo "c равно a";
				break;
			}elseif ($a +=1) {	
				echo "a равно a + 1";
				break;
            }elseif ($b = $c) {
                echo "b равно c";
                break;				
		    }else {
			    echo "Задайте число";
                break;				
			}	
		}					 
?>		
