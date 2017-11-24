Write a function to sort an array.
<hr>

<?php

/**
 * Classic bubble sort
 * @param array $arr [array of integers]
 * @return array
 */
function array_sort($arr){
	for ( $i=0; $i < count($arr) ; $i++ ) { 
		for ( $j=$i + 1; $j < count($arr); $j++ ) { 
			if ( $arr[$i] > $arr[$j] ) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}
echo '<pre>';
print_r(array_sort([5, 2, 8, 7, 9, 3, 4]));
echo '</pre>';