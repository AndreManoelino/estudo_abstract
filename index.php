<?php
include_once("ContaCorrente.php");

$conta = new ContaCorrente(
    "André Manoelino",
    "222.222.222.22",
    "Mg. 14.456.789",
    "Rua jk",
    "Parte Alta",
    "Pindamoiangaba",
    "Rio Grande Do Sul",
    "32879-258",
    "(35)4546-4546",
    "(54)98589-8998",
    "andre@outlook.com",
    "Riquezas",
    "54.474-4",
    


);
$conta->mostrarDados();
$conta->PessoaContacorrente();
?>
