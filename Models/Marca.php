<?php

class Marca{

    private $MarcaId;
    private $Nome;
    private $DescMarca;

    public function getMarcaId() {
        return $this->MarcaId;
    }
    public function getNome() {
        return $this->Nome;
    }
    public function getDescMarca() {
        return $this->DescMarca;
    }

    public function setMarcaId($MarcaId) {
        $this->MarcaId = $MarcaId;
    }
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }
    public function setDescMarca($DescMarca) {
        $this->DescMarca = $DescMarca;
    }
}
?>