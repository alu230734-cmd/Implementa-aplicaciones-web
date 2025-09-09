<?php
//Programa para imprimir mensaje de bienvenida
//Creado por Fernanda gabriela
//Fecha:09/septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a programcion de App Web";
    public function imprimirtexto()
    {
        echo $this->texto1;
        print $this->texto1;
    }
}
$obj1= new texto;
$obj1->imprimirtexto();
?>