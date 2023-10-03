<?php

class CiudadModel{
    public $id_ciudad;
    public $id_provincia;
    public $cod_postal;
    public $ciudad;

    public function __construct(
        string $id_ciu  = '',
        string $id_prov = '',
        string $cod_p   = '',
        string $ciud    = ''
    ){
        $this->id_ciudad    = $id_ciu;
        $this->id_provincia = $id_prov;
        $this->cod_postal   = $cod_p;
        $this->ciudad       = $ciud;
    }
}