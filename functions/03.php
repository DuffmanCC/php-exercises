Write a function to reverse a string.
<hr>

<?php 


function reverseString($str){
	$arr = str_split($str);
	$arrRev = array_reverse($arr);
	$arr = implode('', $arrRev);
	return $arr;
}
print_r(reverseString('hola'));

echo '<br>';

// directamente
echo strrev('hola');

echo '<br>';

// con recursión
function reverseString2($str){
	$length = strlen($str);
	if($length === 1){
		return $str;
	} else {
		return substr($str, -1).reverseString2(substr($str, 0, $length - 1));
		$length--;
	}
}
echo reverseString2('123456789');