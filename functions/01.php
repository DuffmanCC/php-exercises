Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.
<hr>

<?php 

$getFactorial = function($num){
	$factorial = 1;
	for ($i=1; $i <= $num; $i++) { 
		$factorial *= $i;
	}
	return $factorial;
};
echo $getFactorial(6);
echo '<br>';
// con iteración
function getFactorial2($num2){
	$factorial = 1;
	for ($i=1; $i <= $num2; $i++) { 
		$factorial *= $i;
	}
	return $factorial;
};

echo getFactorial2(6);

echo '<br>';
// con recursividad
function getFactorial3($num){
	while( $num != 0){
		return $num * getFactorial3($num-1);
	}
	return 1;
}
print_r(getFactorial3(6));
