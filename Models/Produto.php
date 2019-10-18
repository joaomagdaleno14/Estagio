<?php

class Produto {

    private $ProdutoId;
    private $DescProduto;
    private $Preco;
    private $Tamanho;
    private $MarcaId;

    public function getProdutoId(){
        return $this->ProdutoId;
    }
    public function getDescProduto(){
        return $this->DescProduto;
    }
    public function getPreco(){
        return $this->Preco;
    }
    public function getTamanho(){
        return $this->Tamanho;
    }
    public function getMarcaId(){
        return $this->MarcaId;
    }

    public function setProdutoId($ProdutoId) {
        $this->ProdutoId = $ProdutoId;
    }
    public function setDescProduto($DescProduto){
        $this->DescProduto = $DescProduto;
    }
    public function setPreco($Preco){
        $this->Preco = $Preco;
    }
    public function setTamanho($Tamanho){
        $this->Tamanho = $Tamanho;
    }
    public function setMarcaId($MarcaId){
        $this->MarcaId = $MarcaId;
    }

}
?>