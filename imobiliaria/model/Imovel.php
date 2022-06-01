<?php
require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco{
    private $id;
    private $descricao;
    private $valor;
    private $tipo;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
     public function save(){
        $result = false;
    
        $conexao = new Conexao();
    
        $query = "insert into imovel (id, descricao, valor, tipo) values (null,:descricao,:valor,:tipo)";
        if($conn = $conexao->getConection()){
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':descricao' => $this->descricao, ':valor' => $this->valor, ':tipo' => $this->tipo))){
                $result = $stmt->rowCount();
            }
        }
        return $result;
    }
         
         public function remove($id){

         }
    
         public function find($id){

         }
    
         public function count(){

         }
    
         public function listAll(){
             $conexao = new Conexao();
             $conn = $conexao->getConection();
             $query = "SELECT * FROM imovel";
             $stmt = $con->prepare($query);
             $result = array();
             if($stmt->execute()){
                 while($rs = $stmt->fetchObject(Imovel::class)){
                     $result[] = $rs;
                 }
                } else{
                     $result = false;
                 }
                 return $result;
             }
         
}
?>