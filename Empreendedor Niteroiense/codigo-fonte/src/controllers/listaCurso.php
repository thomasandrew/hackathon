<?php


require_once '../model/Curso.php';

$idCurso= 0;
$Nome = "xx";
$BreveDescricao = "xx";
$Descricao=$Descricao= "xx";
$Grade = "xx";
$CargaHoraria = "xx";
$Link = "xx";


$cadastra = new Curso($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);


$lista = $cadastra->lista();


?>