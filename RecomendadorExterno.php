<?php

namespace Mpwar;

/**
 * Class RecomendadorExternoBlueknow
 *
 * Encargada de la gestión de recomendaciones en base al sistema externo 'Blueknow'.
 * Al ser un proveedor externo, necesita inicializarse antes de intentar obtener las recomendaciones.
 *
 * @package Mpwar
 */
abstract class RecomendadorExterno implements RecomendadorInterface
{
    /**
     * @var bool indica si el sistema externo ha sido inicializado o no. Para poder obtener recomendaciones, debe ser true.
     */
    protected $sistema_externo_inicializado = false;

    public function __construct()
    {
        $this->inicializarSistemaExterno();
    }

    abstract public function obtenerRecomendaciones( $recomendaciones );
}