<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 11/07/2016
 * Time: 12:02 AM
 */

namespace LCS\ServicioBundle\Model;


class OrdenTrabajo {

	/**
	 * @var integer
	 */
	public $numeroOt;

	/**
	 * @var integer
	 */
	public $idPresupuesto;

	/**
	 * @var integer
	 */
	public $version;

	/**
	 * @var string
	 */
	public $observacion;

	/**
	 * @var string
	 */
	public $descripcionEstado;

	/**
	 * @var string
	 */
	public $estado;


	public static function fromJson($jsonString){
		$ot = new OrdenTrabajo();

		$obj = json_decode($jsonString, true)[0];

		$ot->numeroOt = $obj["nroOT"];
		$ot->idPresupuesto = $obj["id_presupuesto"];
		$ot->version = $obj["version"];
		$ot->observacion = $obj["observaciones"];
		$ot->estado = $obj["id_estado"];
		$ot->descripcionEstado = $obj["descripcionEstado"];

		return $ot;
	}
}