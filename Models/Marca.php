<?php

class Marca{

    private $MarcaId;
    private $Nome;
    private $Descricao;

    public function getMarcaId() {
        return $this->MarcaId;
    }
    public function getNome() {
        return $this->Nome;
    }
    public function getDescricao() {
        return $this->Descricao;
    }

    public function setMarcaId($MarcaId) {
        $this->MarcaId = $MarcaId;
    }
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }
    public function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }
}
?>