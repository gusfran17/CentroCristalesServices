<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 15/06/2016
 * Time: 09:57 PM
 */

namespace LCS\ServicioBundle\Service;

use LCS\ServicioBundle\Model\ConsultaOt;

class ConsultaOrdenTrabajoService {

	/* @var \GuzzleHttp\Client $client */
	private $client;

	function __construct($client)
	{
		$this->client = $client;
	}


	/**
	 * @param $ordenTrabajo
	 * @param $dominio
	 * @return ConsultaOt
	 */
	public function consultaOrdenTrabajo($ordenTrabajo, $dominio){

		$request = $dominio.'/'.$ordenTrabajo;
		$response = $this->client->get('getEstadoSiniestro/'.$request);
		$consultaOt = ConsultaOt::fromJson((string)$response->getBody());

		return $consultaOt;
	}

}