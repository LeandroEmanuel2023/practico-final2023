<?php
//agregar modelo contacto
class PersonaModel{
    public $id_cliente;
    public $nombre;
    public $apellido;
    public $dni;
    public $email;
    public $id_domicilio;
    public $id_contacto;
    public $ident_vehiculo;

    /**
     * Function constructora del cliente
     * 
     */
    public function __construct(
        string $nom   = '',
        string $ape   = '',
        string $dni_  = '',
        string $mail  = '',
        string $dom   = '',
        string $cont  = '',
        string $idenV = ''
    ){
        $this->id_cliente     = '';
        $this->nombre         = $nom;
        $this->apellido       = $ape;
        $this->dni            = $dni_;
        $this->email          = $mail;
        $this->id_domicilio   = $dom;
        $this->id_contacto    = $cont;
        $this->ident_vehiculo = $idenV;
    }

}