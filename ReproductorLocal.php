<?php
namespace Mpwar;

class ReproductorLocal extends ReproductorMusica
{
    public function obtenerRecomendaciones( $nombre_cancion_base )
    {
        return $this->recomendador->obtenerRecomendaciones( $nombre_cancion_base );
    }
}