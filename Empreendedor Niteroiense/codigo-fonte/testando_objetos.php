<?php 

include_once "../src/controllers/autoload.php";

include_once "../src/controllers/db_connect.php";


$unidade = new Unidade;

$unidade = $unidade->Listar($conexao);

var_dump($unidade);

foreach($unidade as $informacoes) {
    foreach($informacoes as $chave => $valor) {

      echo $chave;
      echo ': ';
      echo $valor;
      echo '<br />';
      
    }
  }
  

?>