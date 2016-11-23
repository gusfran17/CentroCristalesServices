<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 10:57 AM
 */

namespace LCS\AppBundle\Services\Clients;


use LCS\AppBundle\Services\DTOs\ActualizarDatosRequest;
use LCS\AppBundle\Services\DTOs\ActualizarDatosResponse;
use LCS\AppBundle\Services\DTOs\ObtenerPedidoServicioRequest;
use LCS\AppBundle\Services\DTOs\ObtenerPedidoServicioResponse;
use LCS\AppBundle\Services\DTOs\TurnosDisponiblesRequest;
use LCS\AppBundle\Services\DTOs\TurnosDisponiblesResponse;
use Symfony\Component\Security\Acl\Exception\Exception;

class Service1 {

	private $wsdl;
	private $endpoint;


	function __construct($wsdl, $endpoint)
	{
		$this->wsdl = $wsdl;
		$this->endpoint = $endpoint;
	}


	/**
	 * @param ObtenerPedidoServicioRequest $request
	 * @return ObtenerPedidoServicioResponse
	 */
	public function obtenerPedidoServicio(ObtenerPedidoServicioRequest $request)
	{
		$params = $request->toArray();

		$client = $this->getClient();

		$soapResponse = $client->call('ObtenerPedidoServicio', $params);

		$response = new ObtenerPedidoServicioResponse();

		if(isset($soapResponse['ObtenerPedidoServicioResult'])){
			$response->fromXmlString($soapResponse['ObtenerPedidoServicioResult']);
		}
		else{
			$response->errors[] = 'Respuesta inesperada en WS[obtenerPedidoServicio]: '.var_export($soapResponse, true);
		}

		return $response;
	}

	public function turnosDisponibles(TurnosDisponiblesRequest $request)
	{
		$params = $request->toArray();

		$client = $this->getClient();

		$soapResponse = $client->call('TurnosDisponibles', $params);

		$response = new TurnosDisponiblesResponse();

		if(isset($soapResponse['TurnosDisponiblesResult'])){
			$response->fromXmlString($soapResponse['TurnosDisponiblesResult']);
		}
		else{
			$response->errors[] = 'Respuesta inesperada en WS[obtenerPedidoServicio]: '.var_export($soapResponse, true);
		}

		return $response;


	}

	public function actualizarDatos(ActualizarDatosRequest $request)
	{
		$params = $request->toArray();

		$client = $this->getClient();

		$soapResponse = $client->call('ActualizarDatos', $params);

		$response = new ActualizarDatosResponse();

		if(isset($soapResponse['ActualizarDatosResult'])){
			$response->fromXmlString($soapResponse['ActualizarDatosResult']);
		}
		else{
			$response->errors[] = 'Respuesta inesperada en WS[obtenerPedidoServicio]: '.var_export($soapResponse, true);
		}

		return $response;


	}

	/**
	 * @return \nusoap_client
	 */
	private function getClient()
	{
		$client = new \nusoap_client($this->wsdl, true);
		$client->setEndpoint($this->endpoint);
		return $client;
	}

}