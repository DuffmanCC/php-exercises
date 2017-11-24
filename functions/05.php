 Write a PHP function that checks if a string is all lowercase.
 <hr>
 <?php 
// 65 to 90 mayus
// 97 to 122 minus
/**
 * comprobar si una string está en lowercase
 * @param  string  $str string a comprobar
 * @return boolean
 */
 function isStringLowercase($str){
 	$str = str_split($str);
 	for ($i=0; $i < count($str); $i++) { 
 		// 97 es el valor decimal de la A, si es menor es lowercase
 		if( ord($str[$i]) < 97 ) {
 			return false;
 		}
 	}
 	return true;
 }
 print_r(isStringLowercase('holacaracoll'));