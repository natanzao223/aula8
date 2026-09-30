<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "<h2>Bem-vindo!</h2>";

echo "<p>Olá, $nome!</p>";
echo "<p>Sua cidade é $cidade.</p>";

if ($cidade == "Curitiba") {
    echo "<p>Curitibano!</p>";
}

?>