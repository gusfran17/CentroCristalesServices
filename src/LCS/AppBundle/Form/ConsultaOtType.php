<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 11/07/2016
 * Time: 12:33 AM
 */

namespace LCS\AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsultaOtType extends AbstractType{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('ordenTrabajo', 'text', array(
				'label' => 'Orden de Trabajo',
				'attr' => array(
					'data-rule-number' => 'true'
				)
			))
			->add('dominio', 'text', array(
				'label' => 'Dominio'
			))
			->add('Consultar', 'submit')
		;
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			                       'data_class' => 'LCS\AppBundle\Model\ConsultaOt'
		                       ));
	}

	/**
	 * Returns the name of this type.
	 *
	 * @return string The name of this type
	 */
	public function getName()
	{
		return "lcs_app_consultaot";
	}
}