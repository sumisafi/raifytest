<?php 

$n = 4;
for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $n; $j++) { 
        $m[$i][$j] = rand(0, 5);
    }
}

$sum = 0;
for ($k=0; $k < $n; $k++) { 
    $sum = $sum + $m[$k][$k];
}
echo '<pre>';
print_r($m);
echo '</pre> <br>';
echo $sum;
echo '<br>';


for ($l=0; $l < $n; $l++) {    
$dups = array(); 
foreach(array_count_values($m[$l]) as $val => $c)
    if($c > 1) $dups[] = $val;
    
}
print_r($dups);
?>