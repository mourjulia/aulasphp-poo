<?php
class Cliente
{
    //Atributos (características da Classe)
    public string $nome;
    public int $idade;
    public string $email;
 
    //Métodos (comportamentos da Classe)
    function exibirDados(): void
    {
        echo "Este é o cliente... $this->nome";
    }
 
    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
