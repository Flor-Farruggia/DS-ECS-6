<?php
require_once 'modelos/datosOperacion.php';
require_once 'modelos/oportunidad.php';
require_once 'modelos/persona.php';
require_once 'modelos/respuestaOportunidad.php';

header('Content-Type: application/json');

$d = new DatosOperacion();
$d->MontoSolicitado=500000;
$d->Linea="504";
$d->CantidadCuotas=12;
$d->TasaEfectivaMensual=2.9589;
$d->CuotaPromedio=53503.08;
$d->TasaNominalAnual=36;
$d->CostoFinancieroTotal=56.55;

$p = new Persona();
$p->Nombres="pedro rodriguez";
$p->Sexo="F";
$p->Documento="123123";
$p->Email="aaaa@aaaa.com.ar";
$p->Celular="123456";
$p->TelefonoAlternativo="123456";

$o = new Oportunidad();
$o->Persona=$p;
$o->DatosOperacion=$d;
$o->SmsConsultaId="17654293-27258197726";
$o->IdValidatorId=893;
$o->MotorSolaFirmaId=8870;

$res = new RespuestaOportunidad();
$res->Oportunidad [] =$o;
$res->IsOk=true;

echo json_encode($res);
