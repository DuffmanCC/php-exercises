Write a PHP function that checks whether a passed string is a palindrome or not?
<hr>

<?php

/**
 * Check if a string is a palindrome (without spaces)
 * @param  string  $str
 * @return boolean
 */
function isPalindrome($str){
	$str = str_replace(' ', '', $str);
	return $str === strrev($str);
}

echo isPalindrome('radar');
echo '<br>';
echo isPalindrome('esto no es un palíndromo');
echo '<br>';
echo isPalindrome('amor roma');
echo '<br>';
echo isPalindrome('dabale arroz a la zorra el abad');
echo '<br>';