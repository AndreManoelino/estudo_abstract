<?php
abstract class  Pessoa {
    public$nome;
    public $cpf;
    public $rg;
    public $endereco;
    public $bairro;
    public $cidade;
    public $uf;
    public $cep;
    public $telefone;
    public $celular;
    public $email;

    public function ___construct(
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
        
    )
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->email = $email;
    }

    public function mostrarDados(){
        echo "<h1> Dados Pessoais</h1>";
        echo "Nome: " . $this->nome;
        echo "<br>";

        echo "CPF: " . $this->cpf;
        echo "<br>";

        echo "RG:" . $this->rg;
        echo "<br>";

        echo "Endereco: " . $this->endereco;
        echo "<br>";

        echo "Bairro: " . $this->bairro;
        echo "<br>";

        echo "Cidade: " . $this->cidade;
        echo "<br>";

        echo "UF: " . $this->uf;
        echo "<br>";

        echo "Cep: " . $this->cep;
        echo "<br>";

        echo "Telefone: " . $this->telefone;
        echo "<br>";

        echo "Celular: " . $this->celular;
        echo "<br>";

        echo "Email: " . $this->email;
        echo "<br>";
    }

    abstract public function PessoaContaCorrente();
}