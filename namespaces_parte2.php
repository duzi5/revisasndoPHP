<?php 
require "./bibiliotecas/lib1/lib1.php";
require "./bibiliotecas/lib2/lib2.php";

use B\Cliente;

$c=new Cliente;


print_r($c);
echo $c->__get('nome');