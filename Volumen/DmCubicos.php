<?php
// Clase para la unidad de volumen de decímetros cúbicos
class DmCubicos implements UnidadVolumen {
  private $valor;

  public function __construct($valor) {
    $this->valor = $valor;
  }

  public function convertirA(UnidadVolumen $unidad_destino, $valor) {
    if ($unidad_destino instanceof KmCubicos) {
      return $valor / 1000000000000;
    } else if ($unidad_destino instanceof HmCubicos) {
      return $valor / 1000000000;
    } else if ($unidad_destino instanceof DamCubicos) {
      return $valor / 1000000;
    } else if ($unidad_destino instanceof MCubicos) {
      return $valor / 1000;
    } else if ($unidad_destino instanceof CmCubicos) {
      return $valor * 1000;
    } else if ($unidad_destino instanceof MmCubicos) {
      return $valor * 1000000;
    } else {
      throw new Exception('Unidad de destino inválida');
    }
  }
}

?>