<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$shark = $_POST['triple'];
$abc = $_POST['blazer'];
$sta = $_POST['hoodie'];
$shorts = $_POST['speed'];


$linha = date('d/m/y H:i:s') . " | " . $nome . " | " . $email . " | " . $endereco . " | " . $telefone . " | " . $triple . " | " . $blazer . " | " . $hoodie . " | " . $speed . PHP_EOL; 

file_put_contents('cadastro.txt' , $linha , FILE_APPEND);

header('location: 4-Saint Laurent (YSL).html');

exit;
