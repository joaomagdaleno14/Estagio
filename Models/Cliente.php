<?php

class Cliente {

    private $ClienteId;
    private $PrimNome;
    private $UltNome;
    private $Cpf;
    private $Dt_Nsc;
    private $Telefone;
    private $Endereco;
    private $Estado;
    private $Cidade;
    private $Cep;
    private $Email;
    private $Senha;
    private $SenhaConf;
    private $SenhaHash;


    public function getClienteId() {
        return $this->ClienteId;
    }
    public function getNomeCliente() {
        return $this->PrimNome;
    }
    public function getUltNome() {
        return $this->UltNome;
    }
    public function getCpf() {
        return $this->Cpf;
    }
    public function getDt_Nsc() {
        return $this->Dt_Nsc;
    }
    public function getTelefone() {
        return $this->Telefone;
    }
    public function getEndereco() {
        return $this->Endereco;
    }
    public function getEstado() {
        return $this->Estado;
    }
    public function getCidade() {
        return $this->Cidade;
    }
    public function getCep() {
        return $this->Cep;
    }
    public function getEmail() {
        return $this->Email;
    }
    public function getSenha() {
        return $this->Senha;
    }
    public function getSenhaConf() {
        return $this->SenhaConf;
    }
    public function getSenhaHash() {
        return $this->SenhaHash;
    }



    public function setClienteId($ClienteId) {
        $this->ClienteId = $ClienteId;
    }
    public function setPrimNome($PrimNome) {
        $this->PrimNome = $PrimNome;
    }
    public function setUltNome($UltNome) {
        $this->UltNome = $UltNome;
    }
    public function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }
    public function setDt_Nsc($Dt_Nsc) {
        $this->Dt_Nsc = $Dt_Nsc;
    }
    public function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }
    public function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }
    public function setCidade($Cidade) {
        $this->Cidade = $Cidade;
    }
    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }
    public function setCep($Cep) {
        $this->Cep = $Cep;
    }
    public function setEmail($Email) {
        $this->Email = $Email;
    }
    public function setSenha($Senha) {
        $this->Senha = $Senha;
    }
    public function setSenhaConf($SenhaConf) {
        $this->SenhaConf = $SenhaConf;
    }
    public function setSenhaHash($SenhaHash) {
        $this->SenhaHash = $SenhaHash;
    }


}
