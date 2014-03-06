<?php

namespace Mpwar;

/**
 * Class ExamenIndexCtrl
 *
 * Controlador encargado de la home de nuestra aplicación.
 *
 * @package Mpwar
 */
class ExamenIndexCtrl
{
	/**
	 * @var ReproductorMusica Instancia de la clase encargada de la gestión de la música
	 */
	private $reproductor_musica;

	/**
	 * Instancia un reproductor de música y obtiene recomendaciones de canciones a escuchar en base a un título.
	 */
	public function index()
	{
        //Instancio el recomendador que inyectaremos en el reproductor
        $recomendador = new RecomendadorLocal();

		// Instancio el reproductor de música pasándole el tipo de reproductor que quiero.
		$this->reproductor_musica = new ReproductorLocal( $recomendador );

		// Obtengo las recomendaciones para la canción "Segundo movimiento: Lo de fuera"
		$recomendaciones = $this->reproductor_musica->obtenerRecomendaciones( 'Segundo movimiento: Lo de fuera' );

		// Imprimo por pantalla las recomendaciones
		echo '<pre>Recomendaciones obtenidas: '; // TODO: Remove
		var_dump( $recomendaciones );
		echo '</pre>';
	}
}


