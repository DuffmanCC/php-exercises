Write a PHP class that calculates the factorial of an integer.
<hr>

<?php

class Factorial
{

	public function result($num)
	{
		if( !is_int($num) ){
			throw new InvalidArgumentException('the number is not an integer or missing argument');
		}
		$factorial = 1;
		for ($i=1; $i <= $num; $i++) { 
			$factorial *= $i;
		}

		return $factorial;
	}

}

$newFactorial = new Factorial();
echo $newFactorial->result(5);