Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.
<hr>
<?php  

class MyCalculator
{
	protected $num1;
	protected $num2;

	public function __construct($num1, $num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function add()
	{
		return $this->num1 + $this->num2;
	}

	public function substract()
	{
		return $this->num1 - $this->num2;
	}

	public function multiply()
	{
		return $this->num1 * $this->num2;
	}

	public function divide()
	{
		return $this->num1 / $this->num2;
	}
}

$xxx = new MyCalculator(12, 6);

echo $xxx->add();
echo '<br>';
echo $xxx->substract();
echo '<br>';
echo $xxx->multiply();
echo '<br>';
echo $xxx->divide();

?>