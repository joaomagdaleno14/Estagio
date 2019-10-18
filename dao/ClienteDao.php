<?php
include_once '../Models/Cliente.php';

class ClienteDao extends Cliente{

    public function inserir(Cliente $Cliente ){
        try {
            $connection = new PDO ('mysql:host=127.0.0.1; dbname=Magdaleno;charset=utf8', 'root','');
            $connection->beginTransaction();
            $sql = "INSERT INTO Cliente (PrimNome, UltNome, Cpf, Dt_Nsc, Telefone, Endereco, Estado, Cidade, Cep, Email, Senha"
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
?>