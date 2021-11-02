<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\{Titular, Conta};
use Alura\Banco\Model\{Endereco, CPF};

$cpf = new CPF("60346320305");
$endereco = new Endereco("Rua Professor Teodorico", "815");
$titular = new Titular('Witalo Monteiro', $cpf, $endereco);
$conta = new Conta($titular, 2, 500.0);

echo "<h2>{$conta}</h2>";

echo $conta->sacar(100.0);

echo "<h2>{$conta}</h2>";

?>