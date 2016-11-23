<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:11 AM
 */

namespace LCS\AppBundle\Services\DTOs;


use DateTime;
use SimpleXMLElement;

abstract class AbstractSoapClientResponse {

	protected $datetimeFormat;
	public $errors;

	abstract public function fromXmlString($xmlString);

	function __construct($xmlString = '', $datetimeFormat = 'd/m/Y h:i:s a')
	{
		$this->datetimeFormat = $datetimeFormat;
		$this->errors = array();

		if(!empty($xmlString)) {
			$this->fromXmlString($xmlString);
		}
	}

	/**
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	public function hasError()
	{
		return !empty($this->errors);
	}

	/**
	 * @param $xmlNode
	 * @return null|string
	 */
	protected function getXmlNodeString($xmlNode)
	{
		if(!empty($xmlNode) && $xmlNode->count() > 0) {
			return (string)$xmlNode;
		}

		return null;
	}

	/**
	 * @param $xmlNode
	 * @return null|DateTime
	 */
	protected function getXmlNodeDatetime($xmlNode)
	{
		$fechaString = $this->getXmlNodeString($xmlNode);
		return (!empty($fechaString) ? DateTime::createFromFormat($this->datetimeFormat, $fechaString) : null);
	}

	/**
	 * @param $xmlNode
	 * @return null|array
	 */
	protected function getXmlNodeArray($xmlNode)
	{
		if(!empty($xmlNode) && $xmlNode->count() > 0) {
			return (array) $xmlNode;
		}

		return array();
	}

}