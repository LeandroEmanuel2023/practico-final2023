<?php

class UsuarioModel{
    public $id_usuario;
    public $id_cliente;
    public $usuario;
    public $contrasenia;

    public function __construct(
        string $id_us   = '',
        string $id_cli  = '',
        string $usua    = '',
        string $contra  = ''
    ){
        $this->id_usuario  = $id_us;
        $this->id_cliente  = $id_cli;
        $this->usuario     = $usua;
        $this->contrasenia = $contra;
    }
    
}