<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$shark = $_POST['shark'];
$abc = $_POST['abc'];
$sta = $_POST['sta'];
$shorts = $_POST['shorts'];


$linha = date('d/m/y H:i:s') . " | " . $nome . " | " . $email . " | " . $endereco . " | " . $telefone . " | " . $shark . " | " . $abc . " | " . $sta . " | " . $shorts . PHP_EOL; 

file_put_contents('cadastro.txt' , $linha , FILE_APPEND);

header('location: 2-Prada.html');

exit;