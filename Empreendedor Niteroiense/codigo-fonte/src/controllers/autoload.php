<?php

function carregar(string $nomeClasse)
{
    $caminhoCompleto = __DIR__ . "/../model/$nomeClasse.php";

    if (file_exists($caminhoCompleto)) {
        require $caminhoCompleto;
    }
}

spl_autoload_register("carregar");

?>