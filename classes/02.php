Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.
<hr>

<?php 
class MyClass
{
	public $message = 'Hello All, I am ';
	public function introduce($name)
	{
		return $this->message.$name;
	}
}

class MyClass2
{
	public $message = 'Hello All, I am ';
	public function __construct($name)
	{
		echo $this->message.$name;
	}
}

$xxx = new MyClass();
echo $xxx->introduce('Carlos');
echo '<br>';

$yyy = new MyClass2('David');