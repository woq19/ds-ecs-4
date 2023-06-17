<?php

class Proveedor{

    public $Id;
    public $NombreApellido;
    public $Documento;
    public $Producto;

    public function MostrarDatos(){

        echo 'Id provedor: '.$this->Id.'<br>';
        echo 'Id provedor: '.$this->NombreApellido.'<br>';
        echo 'Id provedor: '.$this->Documento.'<br>';
        echo 'Id producto: '.$this->Producto->Id.'<br>';
        echo 'Codigo Producto: '.$this->Producto->Codigo.'<br>';
        echo 'Descripcion producto: '.$this->Producto->Descripcion.'<br>';
        echo 'Id Marca: '.$this->Producto->Marca->Id.'<br>';
        echo 'Descripcion marca: '.$this->Producto->Marca->Descripcion.'<br>';
        echo 'Codigo marca: '.$this->Producto->Marca->Codigo.'<br>';

    }

}