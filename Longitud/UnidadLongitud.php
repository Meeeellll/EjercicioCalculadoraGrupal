<?php
    // Definimos la interfaz UnidadLongitud que deben implementar todas las clases de unidades de volumen
    interface UnidadLongitud {
        public function convertir_a_metros(UnidadLongitud   $unidad_desde, $valor);
       public function convertir_desde_metros(UnidadLongitud  $unidad_hasta,$valor);
        
    }
?>