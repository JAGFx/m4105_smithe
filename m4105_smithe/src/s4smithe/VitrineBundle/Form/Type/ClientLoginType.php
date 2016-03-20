<?php

	namespace s4smithe\VitrineBundle\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;

	/**
	 * Class ClientType
	 *
	 * @package s4smithe\VitrineBundle\Form\Type
	 */
	class ClientLoginType extends AbstractType {

		/**
		 * @param FormBuilderInterface $builder
		 * @param array                $options
		 */
		public function buildForm( FormBuilderInterface $builder, array $options ) {
			$builder
				->add( 'mail', 'email', array( 'label' => 'E-mail' ) )
				->add( 'password', 'password', array( 'label' => 'Mot de passe' ) );
		}

	}
