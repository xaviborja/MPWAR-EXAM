<?php
namespace Mpwar;

class ReproductorGooglePlay extends ReproductorMusica
{
    public function obtenerRecomendaciones( $nombre_cancion_base )
    {
        $this->recomendador = new RecomendadorExternoRedknow();
        $this->recomendador->inicializarSistemaExternoRedknow();
        return $this->recomendador->obtenerRecomendacionesExternasRedknow( $nombre_cancion_base );
    }
}