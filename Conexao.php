<?php
class Conexao{
    public $con;
function __construct(){  

try{
    $this ->con = new PDO("mysql:hostname=localhost;dbname=SistemaDeEventos","root","");
}catch(PDException $e){
    echo "Erro".$e;
}
}
function Conect(){
    return $this->con;
}

}