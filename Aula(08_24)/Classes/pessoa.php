<?php 


    class Pessoa 
    {
        var $codigo;
        var $nome;
        var $altura;
        var $idade;
        var $nascimento;
        var $escolaridade;
        var $salario;

    
    
    //método construtor inicializa propriedades

    function _construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){

    $this->codigo = $codigo;
    $this->nome = $nome; 
    $this->altura = $altura;
    $this->idade = $idade; 
    $this->nascimento = $nascimento; 
    $this->escolaridade = $escolaridade;
    $this->salario = $salario;}


    //método destrutor finaliza Objeto
    function _destruct() {

        echo "<br>Objeto {$this->nome} finalizado ... <br>"; }

    }
    
    ?>





