Write a PHP class that sorts an ordered integer array with the help of sort() function. 
<hr>
<?php
class SortArray
{
	protected $arr;

	public function __construct($arr)
	{
		$this->arr = $arr;
	}

	public function sortArr($arr)
	{
		$hhh = $this->arr;
		sort($hhh);
		return $hhh;
	}
}

$arr = new SortArray([11, -2, 4, 35, 0, 8, -9]);
print_r($arr->sortArr());