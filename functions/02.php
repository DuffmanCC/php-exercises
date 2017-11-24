Write a function to check a number is prime or not. 
<hr>

<?php

function isPrime($num){
	for ($i=$num -1; $i >= 2 ; $i--) { 
		if($num % $i === 0){
			return 'no es primo';
		}
	}
	return 'es primo';
}

echo isPrime(34657897);