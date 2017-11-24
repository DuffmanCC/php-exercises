Write a PHP script to convert a string to Date and DateTime.
<hr>

<?php 

// date() es una función, si no se le pasa como segundo parámetro
// la función time() usará como default el tiempo actual

$date = date('dS F Y', time());
print_r($date);



// crear un nuevo objeto de la clase DateTime
$date2 = new DateTime;
echo '<pre>';
print_r($date2);
echo '</pre>';

print_r($date2->format('dS F Y'));

echo '<br>';

// estilo orientado a objetos
// el método ::createFromFormat se le pasan dos valores, el formato de fecha y la fecha
$date3 = DateTime::createFromFormat('d-m-Y', '21-02-1979');
echo '<pre>';
print_r($date3);
echo '</pre>';
echo $date3->format('dS F Y');
echo '<br>';

// estilo por procedimientos
$date4 = date_create_from_format('d-m-Y', '21-02-1979');
echo '<pre>';
print_r($date4);
echo '</pre>';
echo date_format($date4, 'dS F Y');

 ?>