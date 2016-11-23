<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 10/07/2016
 * Time: 01:13 PM
 */

namespace LCS\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

class ImageType extends AbstractType
{
	public function getParent()
	{
		return 'file';
	}

	public function getName()
	{
		return 'image';
	}
}