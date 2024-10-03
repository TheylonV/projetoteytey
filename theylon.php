<?php
//TIPOS EM PHP
$meuTexto = "texto";
$numero = 123;
$decimal = 10.5;
$logico = true; // false
$Array = null; //lista
$Object = null;
$vazio = null;

//Array ou lista
$listaCarros = array("Volvo","Bmw","Toyota");

$listaNoticias[0] = array(
    "titulo" => "meu titulo",
    "descrição" => "esse é meu texto",
    "imagem" =>"carro.jpg"

);

var_dump($meuTexto); echo "<br>";
var_dump($numero); echo "<br>";
var_dump($decimal); echo "<br>";
var_dump($logico); echo "<br>";
var_dump($vazio); echo "<br>";
var_dump($Array); echo "<br>";
var_dump($listaCarros[0]."/".$listaCarros[1]); echo "<br>"; //caso queira ver apenas 1 adicione no lado da variavel[posição] caso queira ver nomes especificos = $listaCarros[0]."/".$listaCarros[1]  
var_dump($listaNoticias); echo "<br>";
?>

