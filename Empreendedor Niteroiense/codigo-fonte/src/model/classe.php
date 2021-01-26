<?php 

    class TipoCurso
    
    {
        public $idUnidade;
        public $Nome;
        public $Estado;
        public $SiglaEstado;

        public function Cadastrar(){

        }

        public function Editar(){
            
        }

        public function Excluir(){
            
        }

        public function Listar($conexao){

            
                $dados = array();
                $sql = "SELECT * FROM Unidade ORDER BY idUnidade";
                $resultado = $conexao->query($sql);
            
                if(!$resultado){
                    $erro = $conexao->errorInfo();
                    throw new \PDOException($erro[2], $erro[1]);
                }

                $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                
                return $dados;

            }

    }

?>