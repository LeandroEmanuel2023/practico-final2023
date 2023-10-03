<?php 

class ProvinciaModel{
    public $id_provincia;
    public $provincia;

    public function __construct(
        string $id_prov = '',
        string $prov    = ''
    ){
        $this->id_provincia = $id_prov;
        $this->provincia    = $prov;
    }
}