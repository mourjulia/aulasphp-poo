# aulasphp-poo

# Exemplos de programação orientada a objetos uasando PHP

## 07_autoload-de-classe-usando-composer

-Download e instalação do Composer na máquina
-Criação e configuração do `composer.json` para utilização do autoload de acordo com a `psr-4`
-Execução do comando `composer dumpautoload` via CLI para gerar pasta `vendor` e o `autoload.php`
- Substituição de todos os `require` individuais por um único, apontando para o autoload.
-Exemplo de uso de uma classe abstrata (que não pode ser instanciada) e método `static` (que pode ser acessado diretamnete da classe, sem objeto.)  Exemplo:

```php
Calculadora::somar();
```

## 06_namespaces

- Reoranização virtual/lógica usando namespace (espaços nomeados)
- Udo do `use` para simplificae (atalho) o acesso aos recursos do namespace

**Exemplo sem `use`**

```php
$objeto = new NomeDoNameSpace/NomeDaPasta/NomeDaClasse();
```

**Exemplo com `use`**

```php
use NomeDoNameSpace/NomeDaPasta;
$objeto = new NomeDaClasse();
```

- Evitar conflitos de nomes de classes

## 05_polimorfismo

- Métodos de mesma assinatura (nome, parâmetros, retorno) mas com comportamentos diferentes
- [Herença] indicação de classe abstrata e final
- [Enumeração] Uso da propriedade `name`, para acessar a enumeração/`Enum`

## 04_heranca-e-enumeracoes

- Superclasse e subclasse
- Readequação de propriedades
- Ajustes nas chamadas de construtor, usando `parent` para acessar construtor da superclasse
- Uso se enumeração para criar um tipo de dado com valores customizados
- Alteração de visibilidade para protected em um método de superclasse, permitindo assim o acesso a partir da subclasse
- Organização das pastas e arquivos em `src`

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
 