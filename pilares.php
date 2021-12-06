<?php 

class Funcionario { 
    public $nome = 'josé'; 
    public $telefone = '11 999999'; 
    public $numFilhos = 2; 

    function resumirCadFunc(){
        return  "$this->nome possui $this->numFilhos filhos";
    }

    function modificarNumFilhos(){

    }

}


    $y = new Funcionario();

    echo $y->resumirCadFunc();











?>