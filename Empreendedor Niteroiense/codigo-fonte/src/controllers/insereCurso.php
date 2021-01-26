<?php


require_once '../model/Curso.php';

//use src\model\Curso;

$idCurso =$_POST['idCurso'];
$Nome=$_POST['Nome'];
$BreveDescricao=$_POST['BreveDescricao'];
$Descricao=$_POST['Descricao'];
$Grade=$_POST['Grade'];
$CargaHoraria=$_POST['CargaHoraria'];
$Link=$_POST['Link'];



$cadastra = new Curso($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);

$cadastra->insere($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);

//$cadastra->insere( $idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);

//header ( "location : index.php");






?>



<script>
window.location.href = "https://www.sedeug.tk/admin_cursos.php";
</script>
