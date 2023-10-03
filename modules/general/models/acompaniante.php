<?php 

include_once("models/persona.php");
class AcompanianteModel extends PersonaModel{
    public $id_acompaniante;
    public $id_cliente;
    public $edad;

    public function __construct(
        string $id_acomp = '',
        string $id_cli = '',
        string $nom = '',
        string $ape = '',
        string $dni_a = '',
        string $dom = '',
        string $cont = '',
        string $edad_a = ''
    ){
        parent::__construct(
            $nom, $ape, $dni_a, $dom, $cont
        );
        $this->id_acompaniante = $id_acomp;
        $this->id_cliente = $id_cli;
        $this->edad = $edad_a;
    }
}