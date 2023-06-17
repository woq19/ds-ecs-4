<?php

require_once 'modelo/cliente.php';
require_once 'modelo/producto.php';
require_once 'modelo/marcadelproducto.php';
require_once 'modelo/proveedor.php';

$cl = new Cliente();
$cl->Id=1;
$cl->NombreApellido='Walter Quintana';
$cl->Documento=39663133;

$cl->MostrarDatos();

$mar = new Marca();
$mar->Id=1;
$mar->Descripcion='Pantene';
$mar->Codigo=77905704356066;

$pr = new Producto();
$pr->Id=1;
$pr->Codigo=457;
$pr->Descripcion='Shampoo Pantene 400ml';
$pr->Marca=$mar;

$prov = new Proveedor();
$prov->Id=1;
$prov->NombreApellido='Juan Perez';
$prov->Documento=40122277;
$prov->Producto=$pr;

$prov->MostrarDatos();