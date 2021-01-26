<?php 

try {

    $host = "mysql:host=alangu42_empreendedorniteroiense;";
    $dbname = "dbname=192.185.177.56";
    $user = "alangu42_geral";
    $pass = "123456789";

    $conexao = new PDO($host.$dbname, $user, $pass);

}catch(\PDOException $excecao){
    echo $excecao->getMessage();
}

?>