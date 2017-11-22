Write a simple PHP class which displays the following string. 
<hr>
<?php 
	
class MyClass
{
	public function display()
	{
		echo 'MyClass class has initialized !';
	}
}

class MyClass2
{
	public function __construct()
	{
		echo 'MyClass class has initialized con un constructor!';
	}
}

$xxx = new MyClass();
$xxx->display();
echo '<br>';
$yyy = new MyClass2;
