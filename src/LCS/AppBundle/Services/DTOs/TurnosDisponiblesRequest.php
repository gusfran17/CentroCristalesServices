<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:04 AM
 */

namespace LCS\AppBundle\Services\DTOs;


/**
 * Class TurnosDisponiblesRequest
 *
 * @package LCS\AppBundle\Services\DTOs
 */
class TurnosDisponiblesRequest extends AbstractSoapClientRequest{

	/**
	 * @var
	 */
	protected $nroOt;
	/**
	 * @var
	 */
	protected $fechaDesde;
	/**
	 * @var
	 */
	protected $fechaHasta;

	/**
	 * @param $array
	 */
	protected function fromArray($array)
	{
		$this->nroOt = $array['nroOt'];
		$this->fechaDesde = $array['fechaDesde'];
		$this->fechaHasta = $array['fechaHasta'];
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		return array(
			'NroOT' => $this->nroOt,
			'desdeAAAAMMDD' => $this->fechaDesde,
			'hastaAAAAMMDD' => $this->fechaHasta
		);
	}

	/**
	 * @return mixed
	 */
	public function getNroOt()
	{
		return $this->nroOt;
	}

	/**
	 * @param mixed $nroOt
	 */
	public function setNroOt($nroOt)
	{
		$this->nroOt = $nroOt;
	}

	/**
	 * @return mixed
	 */
	public function getFechaDesde()
	{
		return $this->fechaDesde;
	}

	/**
	 * @param mixed $fechaDesde
	 */
	public function setFechaDesde($fechaDesde)
	{
		$this->fechaDesde = $fechaDesde;
	}

	/**
	 * @return mixed
	 */
	public function getFechaHasta()
	{
		return $this->fechaHasta;
	}

	/**
	 * @param mixed $fechaHasta
	 */
	public function setFechaHasta($fechaHasta)
	{
		$this->fechaHasta = $fechaHasta;
	}


}