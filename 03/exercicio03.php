<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$soma = $numero1 + $numero2;

print "<h2>Resultado</h2>";

print "A soma é: $soma";

echo "<h3>Tipos das variáveis:</h3>";

var_dump($numero1);
echo "<br>";

var_dump($numero2);
echo "<br>";

var_dump($soma);

?>