<?php 
class PessoaJuridica extends Cliente
{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;


    public function __construct(
        string $nome, string $email, string $cnpj, int $ano, string $nomeFantasia)
    {
        parent::__construct($nome, $email,);

        $this->setCnpj($cnpj);
        $this->setAnoFundacao($ano);
        $this->setNomeFantasia($nomeFantasia);

       /* Como o método foi definido mna superclasse como protected, 
       agora é possivel usá-la para mudar a situação de PJ */

       $this->setSituacao(Situacao::PENDENTE);

    }

    // Método polimórfico: sobrescreve o método relatorio() da superclasse Cliente
    // Atençao: os metodos devem ter a mesma assinatura (nome, parametros e retorno)
    public function relatorio(): string
    {
        return "<div>"
            . parent::relatorio() . // Chama o método relatorio() da superclasse .
            "<p><b>Nome Fantasia:</b> {$this->getNomeFantasia()} </p>
            <p><b>CNPj:</b> {$this->getCnpj()} </p>
        </div>";
    }

    private function setCnpj(string $cnpj): void 
    {
        $this->cnpj = $cnpj;
    }

    private function setAnoFundacao(int $ano): void 
    {
        $this->anoFundacao = $ano;
    }

    private function setNomeFantasia(string $nome): void 
    {
        $this->nomeFantasia = $nome;
    }

    public function getCnpj(): string{return $this->cnpj;}

    public function getAnoFundacao(): int {return $this->anoFundacao;}

    public function getNomeFantasia(): string{return $this->nomeFantasia;}      
}