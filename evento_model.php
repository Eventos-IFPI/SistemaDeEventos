<?php
    
Class Cadastro_Model{
    public $id_cadastro;
    public $nome;
    public $celular;
    public $cpf;
    public $rg;
    public $email;
    public $usuario;
    public $senha;
    public $datanasc;
    function __construct(){
        $this->id_cadastro = 0;
    }
    function setNome($nome){
        $this->$this = nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setCelular($celular){
        $this->$this = celular;
    }
    function getCelular(){
        return $this->celular;
    }
    function setCpf($cpf){
        $this->$this = cpf;
    }
    function getCpf(){
        return $this->cpf;
    }
    function setRg($rg){
        $this->$this = rg;
    }
    function getRg(){
        return $this->rg;
    }
    function setEmail($email){
        $this->$this = email;
    }
    function getEmail(){
        return $this->email;
    }
    function setUsuario($usuario){
        $this->$this = usuario;
    }
    function getUsuario(){
        return $this->usuario;
    }
    function setSenha($senha){
        $this->$this = senha;
    }
    function getSenha(){
        return $this->senha;
    }
}
Class Evento_Model{
    public $id_evento;
    public $id_cadastro;
    public $nome;
    public $data;
    public $quantidade_pessoas;
    public $tipoEvento;
    public $id_end;
    public $regiao;
    public $estado;
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;
    }
    function setRegiao($regiao){
        $this->$this = regiao;
    }
    function getRegiao(){
        return $this->regiao;
    }
    function setEstado($estado){
        $this->$this = estado;
    }
    function getEstado(){
        return $this->estado;
    }
    function setCidade(){
        $this ->$this = cidade;
    }
    function getCidade(){
        return $this->cidade;
    }
    function setBairro($bairro){
        $this->$this = bairro;
    }
    function getBairro(){
        return $this->bairro;
    }
    function setRua($rua){
        $this->$this = rua;
    }
    function getRua(){
        return $this->rua;
    }
    function setNumero($numero){
        $this->$this = numero;
    }
    function getNumero(){
        return $this->numero;
    }
}
    function __construct(){
        $this->id_evento = 0;
    }
    function setId_cadastro($id_cadastro){
        $this->$this = id_cadastro;
    }
    function getId_cadastro(){
        return $this->id_cadastro;
    }
    function setId_end($id_end){
        $this->$this = id_end;
    }
    function getId_end(){
        return $this->id_end;
    }
    function setNome($nome){
        $this->$this = nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setData($data){
        $this->$this = data;
    }
    function getData(){
        return $this->data;
    }
    function setQuantidade_pessoas($quantidade_pessoas){
        $this->$this = quantidade_pessoas;
    }
    function getQuantidade_pessoas(){
        return $this->quantidade_pessoas;
    }
    function setTipoEvento($tipoEvento){
        $this->$this = tipoEvento;
    }
    function getTipoEvento(){
        return $this->tipoEvento;
    }
}
