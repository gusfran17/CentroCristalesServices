<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 15/06/2016
 * Time: 09:57 PM
 */

namespace LCS\ServicioBundle\Service;

use Symfony\Bridge\Twig\TwigEngine;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swift_Mime_SimpleMessage;

class PedidoPresupuestoService {


	/* @var $mailer \Swift_Mailer */
	private $mailer;

	/* @var $templating TwigEngine */
	private $templating;

	private $destinationAddress;
	private $sender;
	private $uploadDir;

	function __construct($mailer, $templating, $sender, $destinationAddress, $uploadDir)
	{
		$this->mailer = $mailer;
		$this->templating = $templating;
		$this->sender = $sender;
		$this->destinationAddress = $destinationAddress;
		$this->uploadDir = $uploadDir;
	}


	public function sendPedidoPresupuesto($email, $mensaje, UploadedFile $imagen){

		$uniquePart = md5(uniqid());

		$fileName = $uniquePart.'.'.$imagen->guessExtension();

		$atachmentFile = $imagen->move($this->uploadDir, $fileName);

		/* @var $message \Swift_Message */
		$message = \Swift_Message::newInstance()
             ->setSubject('Pedido presupuesto - COD:'.substr($uniquePart,0,8))
             ->setFrom($this->sender)
			 ->setReplyTo($email)
             ->setTo($this->destinationAddress)
             ->setBody(
                 $this->templating->render(
                     'LCSWebServiceBundle:V1:pedidoPresupuesto.mail.html.twig',
                     array(
	                     'email' => $email,
	                     'mensaje' => $mensaje
                     )
                 ),
                 'text/html'
             );

		$attachment = \Swift_Attachment::fromPath($atachmentFile->getPathname());
		$message->attach($attachment);

		$this->mailer->send($message);
	}

}