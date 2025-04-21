<?php

require_once("config.php");

							//Carrega um usuario
//$root = new usuario();
//$root->loadById(3);
//echo $root;

							//carrega uma lista de usuarios
//$lista = Usuario::getlist();

 header('Content-Type: application/json; charset=utf-8'); 
//echo json_encode($lista[0]);

 							//carrega uma lista de usuarios buscando pelo login 
 //$search = Usuario::search("lu");

 //echo json_encode($search);

 							//carrega usuario usando login e senha 
$usuario = new Usuario();
$usuario-> login("lucca", "1234");

echo $usuario;


?>