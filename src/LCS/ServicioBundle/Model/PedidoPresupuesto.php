<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 15/06/2016
 * Time: 09:41 PM
 */

namespace LCS\ServicioBundle\Model;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class PedidoPresupuesto {

	/**
	 * @var string
	 */
	public $email;

	/**
	 * @var string
	 */
	public $mensaje;

	/**
	 * @var UploadedFile
	 */
	public $imagen;

}