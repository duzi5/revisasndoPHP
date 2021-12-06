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



   class Exemplo {
       public static $atributo1 = "Eu sou um atributo estático ";
       public $atributo2 = "Eu sou um atributo normal ";



       public static function metodo1() { 
           echo 'Eu sou um método estático';
       }

       public function metodo2(){
           echo "Eu sou uma função normal.";
       }



   } 



    echo Exemplo::$atributo1









?>