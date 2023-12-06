<?php
class Cliente {
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }
}
?>
