<?php
    // Definimos la interfaz UnidadVolumen que deben implementar todas las clases de unidades de volumen
    interface UnidadVolumen {
        public function convertirA(UnidadVolumen $unidad_destino, $valor);
    }
?>