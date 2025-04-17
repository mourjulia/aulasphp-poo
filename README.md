# aulasphp-poo

# Exemplos de programação orientada a objetos uasando PHP

## 03_encapsulamento-e-metodo-construtor

- Implementação do método construtor obrigando a inicialização do objeto com dados provenientes de parâmetros
- Chamada dos setters a partir do construtor
- Mudança de visibilidade dos setters para privad

## 02_encapsulamento-para-visibilidade

- Utilização de diferentes visibilidades (private e public)
- Controle da forma como os dados são acessados (getters) e modificados (setters)
- Com esta abordagem, podemos esconder detalhes de implementação da classe
- Podemos atribuit diferentes lógicas de negócio (validações, sanitizações etc)
 
## 01_abstracao-usando-classes-atributos-metodos
 
- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(sempre iniciando com letra maiuscúla)*
    - Definição de atributos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - tipo de dados
        - nome do atributo
    - Definição de métodos contendo:
        - tipo de visibilidade (nos exemplos, usamos `public`)
        - nome do método
        - detalhes adicionais (parâmetros, tipo de retorno etc)
        -Uso do `$this` para acessar os recursos da classe
- Na `index.php`:
    - Uso do `require` para referenciar a classe `Cliente`
    - Crianção dos objetivos `$cliente` e `$clienteB` a partir da  classe usando `new Cliente()`
    - Atribuição de dados de forma direta aos atributos usando `nomeObjeto->atributo = valor`
    - Chamada de métodos através do objeto usando `$nome`
 