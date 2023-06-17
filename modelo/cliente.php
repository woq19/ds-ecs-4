<?php

class Cliente{

    public $Id;
    public $NombreApellido;
    public $Documento;

    public function MostrarDatos(){

        echo 'Id cliente: '.$this->Id.'<br>';
        echo 'Nombre y apellido del cliente: '.$this->NombreApellido.'<br>';
        echo 'Dni cliente: '.$this->Documento.'<br>';

    }

}