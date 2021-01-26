<?php


require_once '../model/Curso.php';

//use src\model\Curso;

$idCurso =$_POST['idCurso'];


/*
echo $cpf.'<br>'; 
echo $nome.'<br>'; 
echo $telefone.'<br>';
echo $endereco.'<br>';
echo $email.'<br>';
*/

$cadastra = new Curso($idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);

$cadastra->exclui($idCurso);

//$cadastra->insere( $idCurso, $Nome, $BreveDescricao,$Descricao,  $Grade, $CargaHoraria,  $Link);

//header ( "location : index.php");






?>




<script>
window.location.href = "https://www.sedeug.tk/admin_cursos.php";
</script>