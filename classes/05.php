Calculate the difference between two dates using PHP OOP approach.
<hr>
<?php

class DateStuff
{
	protected $dateStart;
	protected $dateEnd;

	public function __construct($dateStart, $dateEnd)
	{
		$this->dateStart = $dateStart;
		$this->dateEnd = $dateEnd;
	}

	public function DateDifferent()
	{
		$date1 = new DateTime($this->dateStart);
		$date2 = new DateTime($this->dateEnd);
		$interval = $date1->diff($date2);
		return $interval->format('%R%a').' days';
	}
}

$diff = new DateStuff('21-02-1979', '23-11-2017');
echo $diff->DateDifferent();