<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:04 AM
 */

namespace LCS\AppBundle\Services\DTOs;


use DateTime;

class TurnosDisponiblesResponse extends AbstractSoapClientResponse{

	public $turnos;

	public function fromXmlString($xmlString)
	{
		$xml=simplexml_load_string($xmlString) or die("Error: TurnosDisponiblesResponse: Cannot create object");
		$xmlArray=(array)$xml->children();

		$error = $this->getXmlNodeString($xmlArray['ERROR']);
		if(!empty($error)){
			$this->errors[] = $error;
		}

		$this->turnos = array_map(function($item){
			return DateTime::createFromFormat('Ymd H:i', $item);
		}, $xmlArray['TurnoDisponible']);
	}

	/**
	 * @return mixed
	 */
	public function getTurnos()
	{
		return $this->turnos;
	}

}