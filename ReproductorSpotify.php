<?php
namespace Mpwar;

class ReproductorSpotify extends ReproductorMusica
{
    public function obtenerRecomendaciones( $nombre_cancion_base )
    {
        $this->recomendador->inicializarSistemaExterno();
        return $this->recomendador->obtenerRecomendaciones( $nombre_cancion_base );
    }
}