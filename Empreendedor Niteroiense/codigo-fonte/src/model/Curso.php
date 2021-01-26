
<?php

//namespace src\model;
//use \PDO;

Class Curso 
{
    private  $idCurso;
    private  $Nome;
    private  $BreveDescricao;
    private  $Descricao;
    private  $Grade;
    private  $CargaHoraria;
    private  $Link;

    
    public function __construct(int $idCurso,string $Nome,string $BreveDescricao,string $Descricao, string $Grade,string $CargaHoraria, String $Link)
    {   
        $this->idCurso=$idCurso;
        $this->Nome=$Nome;
        $this->BreveDescricao=$BreveDescricao;
        $this->Descricao=$Descricao;
        $this->Grade=$Grade;
        $this->CargaHoraria=$CargaHoraria;
        $this->Link=$Link;
        
    }


    /*metodo lista todos dados da tabela*/
    public function lista()
    {
        $query= "SELECT idCurso,Nome,BreveDescricao,Descricao,Grade,CargaHoraria,Link FROM Curso ORDER BY idCurso ASC" ;
        $conexao = new PDO('mysql:host=ns208.hostgator.com.br;dbname=alangu42_empreendedorniteroiense','alangu42_geral','123456789');
        /*$conexao=new PDO('mysql:host=127.0.0.1;dbname=xxxxx','usuario','senha');*/
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        

    return $lista;
    }

    /*metodo insere os dados na tabela*/
    public function insere( $idCurso, $Nome, $BreveDescricao, $Descricao,  $Grade, $CargaHoraria,  $Link)
    {


        $query= "INSERT INTO Curso (idCurso,Nome,BreveDescricao,Descricao,Grade,CargaHoraria,Link) VALUES ('$idCurso','$Nome','$BreveDescricao','$Descricao','$Grade','$CargaHoraria','$Link')" ;
        /*echo $query;*/
        $conexao = new PDO('mysql:host=ns208.hostgator.com.br;dbname=alangu42_empreendedorniteroiense','alangu42_geral','123456789');
       /* $conexao = new PDO('mysql:host=localhost:3305;dbname=teste','root','');*/
        /* $conexao=new PDO('mysql:host=127.0.0.1;dbname=xxxxx','usuario','senha');*/
        $conexao->exec($query);
        echo $query;
        
    
    }

  
     /* metodo executa a linha do banco de dados  a ser alterada */
    public function altera(int $idCurso,string $Nome,string $BreveDescricao,string $Descricao, string $Grade,string $CargaHoraria, String $Link)
    {


        $query = "UPDATE Curso set idCurso = '$idCurso'  , Nome = '$Nome' , BreveDescricao = '$BreveDescricao', Descricao = '$Descricao', Grade = '$Grade',
            CargaHoraria = '$CargaHoraria', Link = '$Link' 
          WHERE idCurso = '$idCurso' ";
        /*echo $query;*/
        $conexao = new PDO('mysql:host=ns208.hostgator.com.br;dbname=alangu42_empreendedorniteroiense','alangu42_geral','123456789');
        /* $conexao=new PDO('mysql:host=127.0.0.1;dbname=xxxxx','usuario','senha');*/
        $conexao->exec($query);
    }


    /*metodo executa exclusao na tabela */
    public function exclui(string $idCurso)
    {
        $query = "DELETE FROM Curso WHERE idCurso ='$idCurso' ";
        $conexao = new PDO('mysql:host=ns208.hostgator.com.br;dbname=alangu42_empreendedorniteroiense','alangu42_geral','123456789');
        /* $conexao=new PDO('mysql:host=127.0.0.1;dbname=xxxxx','usuario','senha');*/
        $conexao->exec($query);
    }

}