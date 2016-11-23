<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 28/09/2015
 * Time: 11:19 AM
 */

namespace LCS\AppBundle\Controller;


use LCS\AppBundle\Response\CommonJsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends Controller{

	/**
	 * @param $data
	 * @return JsonResponse
	 */
	protected function JsonOk($data)
	{
		$json = new CommonJsonResponse();
		$json->success = true;
		$json->data = $data;

		return new JsonResponse($json);
	}

	/**
	 * @param $data
	 * @return JsonResponse
	 */
	protected function JsonError($message, $data = null)
	{
		$json = new CommonJsonResponse();
		$json->success = false;
		$json->message = $message;
		$json->data = $data;

		return new JsonResponse($json);
	}
}