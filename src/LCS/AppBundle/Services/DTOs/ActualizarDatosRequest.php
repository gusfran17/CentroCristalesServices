<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 25/09/2015
 * Time: 11:03 AM
 */

namespace LCS\AppBundle\Services\DTOs;


class ActualizarDatosRequest extends AbstractSoapClientRequest{

	protected $nroOt;
	protected $nombre;
	protected $patente;
	protected $celular;
	protected $turno;

	protected function fromArray($array)
	{
		$this->nroOt = $array['nroOt'];
		$this->nombre = $array['nombre'];
		$this->patente = $array['patente'];
		$this->celular = $array['celular'];
		$this->turno = $array['turno'];
	}

	public function toArray()
	{
		return array(
			'NroOT' => $this->nroOt,
			'nombre' => $this->nombre,
			'patente' => $this->patente,
			'celular' => $this->celular,
			'turnoAAAAMMDDHHMM' => $this->turno
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
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * @param mixed $nombre
	 */
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	/**
	 * @return mixed
	 */
	public function getPatente()
	{
		return $this->patente;
	}

	/**
	 * @param mixed $patente
	 */
	public function setPatente($patente)
	{
		$this->patente = $patente;
	}

	/**
	 * @return mixed
	 */
	public function getCelular()
	{
		return $this->celular;
	}

	/**
	 * @param mixed $celular
	 */
	public function setCelular($celular)
	{
		$this->celular = $celular;
	}

	/**
	 * @return mixed
	 */
	public function getTurno()
	{
		return $this->turno;
	}

	/**
	 * @param mixed $turno
	 */
	public function setTurno($turno)
	{
		$this->turno = $turno;
	}


}