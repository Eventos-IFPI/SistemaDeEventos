<?php
  include("../SistemaDeEventos/model.php");
  include("../SistemaDeEventos/Conexao.php");
  Class Evento_Control{  
    public $dados;
    public $conn;
    function __construct()
    {
        $this->dados = new Evento_Model();
        $this->conn = new Conexao();            
    }
    function View(){
        $sql = "SELECT * FROM Evento";
        $d = $this->conn->Conect();
        $dados=$d->prepare($sql);
        $dados->execute();
        return $dados;
  
      }
      function View_id($id_evento){
          $sql = "SELECT * FROM Evento where id_evento = :id_evento";
          $d = $this->conn->Conect();
          $dados = $d->prepare($sql);
          $dados->bindValue("id_evento", $id_evento);
          $dados->execute();
          return $dados;
      }
      function Add($id_evento, $id_cadastro, $nome, $data, $quantidade_pessoas, $tipoEvento, $regiao,$estado,$cidade,$bairro,$rua,$numero){  
        $this->dados->setRegiao($regiao);
        $this->dados->setEstado($estado);
        $this->dados->setCidade($cidade);
        $this->dados->setBairro($bairro);
        $this->dados->setRua($rua);
        $this->dados->setNumero($numero);
        $this->dados->setId_evento($id_evento);
        $this->dados->setId_cadastro($id_cadastro);
        $this->dados->setNome($nome);
        $this->dados->setData($data);
        $this->dados->setQuantidade_pessoas($quantidade_pessoas);
        $this->dados->setTipoEvento($tipoEvento);
        $sql = "INSERT INTO  Evento (id_evento, id_cadastro, nome, data, quantidade_pessoas, tipoEvento, regiao,estado,cidade,bairro,rua,numero) values (:id_evento, :id_cadastro, :nome, :data, :quantidade_pessoas, :tipoEvento, :regiao,:estado,:cidade,:bairro,:rua,:numero)";
        $d = $this->conn->Conect();
        $dados = $d->prepare($sql);
        $dados->bindValue(":id_evento", $this->dados->getId_evento());
        $dados->bindValue(":id_cadastro",$this->dados->getId_cadastro());
        $dados->bindValue(":nome",$this->dados->getId_Nome());
        $dados->bindValue(":data",$this->dados->getData());
        $dados->bindValue(":quantidade_pessoas",$this->dados->getQuantidade_pessoas());
        $dados->bindValue(":tipoEvento",$this->dados->getTipoEvento());
        $dados->bindValue(":regiao",$this->dados->getRegiao());
        $dados->bindValue(":id_estado",$this->dados->getId_Estado());
        $dados->bindValue(":cidade",$this->dados->getCidade());
        $dados->bindValue(":bairro",$this->dados->getBairro());
        $dados->bindValue(":rua",$this->dados->getRua());
        $dados->bindValue(":numero",$this->dados->getNumero());
        
        $dados->execute();     
        header("Location: View.php");
        function Deletar($id)
    {
      $sql = "DELETE FROM Evento WHERE id_evento = :id_evento";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":id_evento", $id_evento);
      $dados->execute();
      header("Location: ../view/evento_view.php");
    }
    function Atualizar($id_evento, $id_cadastro, $nome, $data, $quantidade_pessoas, $tipoEvento, $regiao,$estado,$cidade,$bairro,$rua,$numero)
    {
      $sql = "UPDATE Evento set nome=:nome, cpf=:cpf WHERE id=:id";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":id_evento", $this->dados->getId_evento());
        $dados->bindValue(":id_cadastro",$this->dados->getId_cadastro());
        $dados->bindValue(":nome",$this->dados->getId_Nome());
        $dados->bindValue(":data",$this->dados->getData());
        $dados->bindValue(":quantidade_pessoas",$this->dados->getQuantidade_pessoas());
        $dados->bindValue(":tipoEvento",$this->dados->getTipoEvento());
        $dados->bindValue(":regiao",$this->dados->getRegiao());
        $dados->bindValue(":id_estado",$this->dados->getId_Estado());
        $dados->bindValue(":cidade",$this->dados->getCidade());
        $dados->bindValue(":bairro",$this->dados->getBairro());
        $dados->bindValue(":rua",$this->dados->getRua());
        $dados->bindValue(":numero",$this->dados->getNumero());
        
      $dados->execute();
      header("Location: ../view/evento_view.php");      
    }
        