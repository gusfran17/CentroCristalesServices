<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 11/07/2016
 * Time: 12:00 AM
 */

namespace LCS\ServicioBundle\Model;




class ConsultaOt {

	/**
	 * @var OrdenTrabajo
	 */
	public $ordenTrabajo;

	/**
	 * @var string
	 */
	public $estado;

	/**
	 * @var string
	 */
	public $estadoDescripcion;


	public static function fromJson($jsonString){
		$cot = new ConsultaOt();

		$obj = json_decode($jsonString, true);

		$cot->estado = $obj["status"];
		$cot->estadoDescripcion = $obj["statusText"];
		$cot->ordenTrabajo = OrdenTrabajo::fromJson($obj["resultadoJson"]);

		return $cot;
	}

}