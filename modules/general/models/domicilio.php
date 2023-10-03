<?php

class DOmicilioModel{
    public $id_domicilio;
    public $id_cliente;
    public $id_provincia;
    public $id_ciudad;

    public function __construct(
        string $id_dom  = '',
        string $id_cli  = '',
        string $id_prov = '',
        string $id_ciu  = ''
    ){
        $this->id_domicilio = $id_dom;
        $this->id_cliente   = $id_cli;
        $this->id_provincia = $id_prov;
        $this->id_ciudad    = $id_ciu;
    }
}