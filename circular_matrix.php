<?php
function circular_matrix($n){	

	$k=1;
	$c1=0;
	$c2=$n-1;
	$r1=0;
	$r2=$n-1;
	$result = array();
	while ($k<=$n*$n){
		for ($i=$c1;$i<=$c2;$i++){

			$result[$r1][$i] = $k++;
			
		}
		for ($j=$r1+1;$j<=$r2;$j++){	

			$result[$j][$c2] = $k++;
			
		}
		for ($i=$c2-1;$i>=$c1;$i--){
			
			$result[$r2][$i] = $k++;
			
		}
		for ($j=$r2-1;$j>=$r1+1;$j--){
			
			$result[$j][$c1] = $k++;
			
		}
		$c1++;
		$c2--;
		$r1++;
		$r2--;
	}
	foreach ($result as $key => $item) {
		ksort($item);
		echo implode(" ", $item)."\n";
	}
}
$n = $argv[1];

circular_matrix($n);
?>