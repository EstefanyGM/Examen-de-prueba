<?php
class Persona
{
  public $nombre;
  public $peso;
  public $estatura;

  function SaberIMC()
  {
    $EstaturaAlCuadrado = $this->estatura * $this->estatura;
    $CalcularIMC = $this->peso / $EstaturaAlCuadrado;
    if ($CalcularIMC < 18.5) {
      return "Delgadez o bajo peso";
    } elseif ($CalcularIMC >= 18.5 && $CalcularIMC <= 24.9) {
      return "peso saludable";
    } elseif ($CalcularIMC >= 25 && $CalcularIMC <= 29.9) {
      return "tienes sobre peso";
    } elseif ($CalcularIMC >= 30) {
      return "Obecidad";
    } else {
      return "peso erroneo";
    }
  }
}
