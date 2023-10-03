<?php

class ContactoModel{
    public $id_contacto;
    public $tipo_contacto;
    public $contacto;

    public function __construct(
        string $id_c    = '',
        string $tipo_c  = '',
        string $cont    = ''
    ){
        $this->id_contacto   = $id_c;
        $this->tipo_contacto = $tipo_c;
        $this->contacto      = $cont;
    }
}