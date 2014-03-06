<?php
namespace Mpwar;

class ReproductorSpotify extends ReproductorMusica
{
    public function obtenerRecomendaciones( $nombre_cancion_base )
    {
        $this->recomendador = new RecomendadorExternoBlueknow();
        $this->recomendador->inicializarSistemaExternoBlueknow();
        return $this->recomendador->obtenerRecomendacionesExternasBlueknow( $nombre_cancion_base );
    }
}