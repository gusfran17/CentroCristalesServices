<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:03 AM
 */

namespace LCS\AppBundle\Services\DTOs;


class ActualizarDatosResponse extends AbstractSoapClientResponse{

	public $resultado;
	public $success;

	public function fromXmlString($xmlString)
	{
		$xml=simplexml_load_string($xmlString) or die("Error: ActualizarDatosResponse: Cannot create object");

		$error = $this->getXmlNodeString($xml->ERROR);
		if(!empty($error)){
			$this->errors[] = $error;
		}

		$this->resultado = $this->getXmlNodeString($xml->RESULTADO);
		$this->success = ($this->resultado == 'OK');
	}

	/**
	 * @return mixed
	 */
	public function getResultado()
	{
		return $this->resultado;
	}

	/**
	 * @return mixed
	 */
	public function getSuccess()
	{
		return $this->success;
	}


}