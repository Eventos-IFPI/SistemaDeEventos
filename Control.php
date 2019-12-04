<?php
  include("../SistemaDeEventos/Model.php");
  include("../SistemaDeEventos/Conexao.php");
  Class Endereco_Control{  
    public $dados;
    public $conn;
    function __construct()
    {
        $this->dados = new Endereco_Model();
        $this->conn = new Conexao();            
    }
    function View(){
        $sql = "SELECT * FROM Endereco";
        $d = $this->conn->Conect();
        $dados=$d->prepare($sql);
        $dados->execute();
        return $dados;
  
      }
      function View_id($id_end){
          $sql = "SELECT * FROM Endereco where id_end = :id_end";
          $d = $this->conn->Conect();
          $dados = $d->prepare($sql);
          $dados->bindValue("id_end", $id_end);
          $dados->execute();
          return $dados;
      }
      function Add( $regiao,$estado,$cidade,$bairro,$rua,$numero){  
        $this->dados->setRegiao($regiao);
        $this->dados->setEstado($estado);
        $this->dados->setCidade($cidade);
        $this->dados->setBairro($bairro);
        $this->dados->setRua($rua);
        $this->dados->setNumero($numero);
        $sql = "INSERT INTO  Endereco (regiao,estado,cidade) values (:nome,:cpf)";
        $d = $this->conn->Conect();
        $dados = $d->prepare($sql);
        $dados->bindValue(":nome", $this->dados->getNome());
        $dados->bindValue(":cpf",$this->dados->getCpf());
        $dados->execute();     
        header("Location: View.php");