<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$shark = $_POST['tuxedo'];
$abc = $_POST['teddy'];
$sta = $_POST['monogram'];
$shorts = $_POST['tribute'];


$linha = date('d/m/y H:i:s') . " | " . $nome . " | " . $email . " | " . $endereco . " | " . $telefone . " | " . $tuxedo . " | " . $teddy . " | " . $monogram . " | " . $tribute . PHP_EOL; 

file_put_contents('cadastro.txt' , $linha , FILE_APPEND);

header('location: centro.html');

exit;