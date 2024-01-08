<?php
/** classe que ira cadastrar dados no usuario */
include_once("Pessoa.php");
class Contacorrente extends Pessoa{
    public $banco;
    public $agencia;
    public $conta;

    public function __construct(
        $nome,
        $cpf,
        $rg,
        $endereco,
        $bairro,
        $cidade,
        $uf,
        $cep,
        $telefone,
        $celular,
        $email,
        $agencia,
        $conta
    );
    {
    parent ::__construct(
        $nome,
        $cpf,
        $rg,
        $endereco,
        $bairro,
        $cidade,
        $uf,
        $cep,
        $telefone,
        $celular,
        $email

    );
    //definindo alguns atributos da classe filha.

    $this->banco = $banco;
    $this->agencia = $agencia;
    $this->conta = $conta;
    }
    public function PessoaContacorrente(){
        echo "<br><br><h1>conta Corrente</h1><br>";
        echo "Banco: "  . $this->banco  . "<br>";
        echo "Agencia: " .  $this->agencia ."<br>";
        echo "Conta: " . $this->conta . "<br>";

    }
}
