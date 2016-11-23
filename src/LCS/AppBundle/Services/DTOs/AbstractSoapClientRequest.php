<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:11 AM
 */

namespace LCS\AppBundle\Services\DTOs;


abstract class AbstractSoapClientRequest {

	abstract protected function fromArray($array);
	abstract public function toArray();

	function __construct($request = array())
	{
		if(!empty($request)) {
			$this->fromArray($request);
		}
	}

}