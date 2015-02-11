<?php
$total_pages = 9;
$i = 0;
while($i < $total_pages) {
  $i += 1; 
    echo $i; 
}





exit;
?>



<?php


$numbers = array(0.01,1,100,1003,1001,1002);


    $count_less_than_one           = 0;
    $count_between_one_and_thousand = 0;
    $count_greater_than_thousand    = 0;

    foreach ($numbers as $number) {
        if ($number < 1) {
        	$count_less_than_one += 1;	
        }
        if ($number >= 1 && $number <= 1000) {
        	$count_between_one_and_thousand += 1;
        }
		if ($number > 1000) {
			$count_greater_than_thousand += 1;
		}
    }

echo $count_less_than_one;
echo "\n";
echo $count_between_one_and_thousand;
echo "\n";
echo $count_greater_than_thousand;


exit;
?>



<?php
$flavor = "cookie dough";
var_dump(strpos($flavor,"oo"));
echo "\n";
var_dump(strpos($flavor,"dough"));
echo "\n";
var_dump(strpos($flavor,"Vanilla"));


?>




<?php

$store = "Ye Olde Ice Cream Shoppe";
var_dump($store);

$fans = 926;
echo "\n";
var_dump($fans);

$flavors = array("Vanilla","Cookie Dough");
echo "\n";
var_dump($flavors);

$is_open = true;
echo "\n";
var_dump($is_open);