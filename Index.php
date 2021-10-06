<?php
require_once 'persona.php';

$Persona1 = new Persona;
$Persona1->nombre = 'sara';
$Persona1->peso = 50;
$Persona1->estatura = 1.90;

$res = $Persona1->SaberIMC();

echo ($res);
