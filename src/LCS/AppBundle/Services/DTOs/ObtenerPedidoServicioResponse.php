<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:03 AM
 */

namespace LCS\AppBundle\Services\DTOs;


use \DateTime;

class ObtenerPedidoServicioResponse extends AbstractSoapClientResponse{

	public $nroOt;
	public $fechaAlta;
	public $nombre;
	public $patente;
	public $celular;
	public $turno;
	public $sucursal;
	public $horasEstimadas;

	public function fromXmlString($xmlString)
	{
		$xml=simplexml_load_string($xmlString) or die("Error: ObtenerPedidoServicioResponse: Cannot create object");

		$error = $this->getXmlNodeString($xml->ERROR);
		if(!empty($error)){
			$this->errors[] = $error;
		}

		//seteo los campos
		$this->nroOt = $this->getXmlNodeString($xml->NroOT);
		$this->fechaAlta = $this->getXmlNodeDatetime($xml->FechaAlta);
		$this->nombre = $this->getXmlNodeString($xml->Nombre);
		$this->patente = $this->getXmlNodeString($xml->Patente);
		$this->celular = $this->getXmlNodeString($xml->Celular);
		$this->turno = $this->getXmlNodeDatetime($xml->Turno);
		$this->sucursal = $this->getXmlNodeString($xml->Sucursal);
		$this->horasEstimadas = $this->getXmlNodeString($xml->HorasEstimadas);
	}

	/**
	 * @return mixed
	 */
	public function getNroOt()
	{
		return $this->nroOt;
	}

	/**
	 * @return mixed
	 */
	public function getFechaAlta()
	{
		return $this->fechaAlta;
	}

	/**
	 * @return mixed
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * @return mixed
	 */
	public function getPatente()
	{
		return $this->patente;
	}

	/**
	 * @return mixed
	 */
	public function getCelular()
	{
		return $this->celular;
	}

	/**
	 * @return mixed
	 */
	public function getTurno()
	{
		return $this->turno;
	}

	/**
	 * @return mixed
	 */
	public function getSucursal()
	{
		return $this->sucursal;
	}

	/**
	 * @return mixed
	 */
	public function getHorasEstimadas()
	{
		return $this->horasEstimadas;
	}


}