<?php
//Programa para imprimir mensaje de bienvenida
//Creado por Damaris Ailin Morin Martinez
//Fecha:09/septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a Programacion de App Web";
    public function imprimirtexto()
    {
        echo $this->texto1."<br>";
        print $this->texto1;
    }
}
$obj1=new text;
$obj1->imprimirtexto();
?>