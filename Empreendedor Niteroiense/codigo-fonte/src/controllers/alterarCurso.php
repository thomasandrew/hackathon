<?php


require_once '../model/Curso.php';

$idCurso = $_POST['idCurso'];
$Nome=$_POST['Nome'];
$BreveDescricao=$_POST['BreveDescricao'];
$Descricao=$_POST['Descricao'];
$Grade=$_POST['Grade'];
$CargaHoraria=$_POST['CargaHoraria'];
$Link=$_POST['Link'];

$cadastra = new Curso($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria, $Link);

$cadastra->altera($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria, $Link);

?>



<script>
window.location.href = "https://www.sedeug.tk/admin_cursos.php";
</script>
