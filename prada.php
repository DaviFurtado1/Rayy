<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$shark = $_POST['nylon'];
$abc = $_POST['loafer'];
$sta = $_POST['bowling'];
$shorts = $_POST['cup'];


$linha = date('d/m/y H:i:s') . " | " . $nome . " | " . $email . " | " . $endereco . " | " . $telefone . " | " . $nylon . " | " . $loafer . " | " . $bowling . " | " . $cup . PHP_EOL; 

file_put_contents('cadastro.txt' , $linha , FILE_APPEND);

header('location: 3-Balenciaga.html');

exit;