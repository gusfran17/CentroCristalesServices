<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:03 AM
 */

namespace LCS\AppBundle\Services\DTOs;


class ObtenerPedidoServicioRequest extends AbstractSoapClientRequest{

	protected $siniestro;
	protected $companiaId;

	protected function fromArray($array)
	{
		$this->siniestro = $array['siniestro'];
		$this->companiaId = $array['companiaId'];
	}

	public function toArray()
	{
		return array(
			'siniestro' => $this->siniestro,
			'id_compania' => $this->companiaId
		);
	}

	/**
	 * @return mixed
	 */
	public function getSiniestro()
	{
		return $this->siniestro;
	}

	/**
	 * @param mixed $siniestro
	 */
	public function setSiniestro($siniestro)
	{
		$this->siniestro = $siniestro;
	}

	/**
	 * @return mixed
	 */
	public function getCompaniaId()
	{
		return $this->companiaId;
	}

	/**
	 * @param mixed $companiaId
	 */
	public function setCompaniaId($companiaId)
	{
		$this->companiaId = $companiaId;
	}

}