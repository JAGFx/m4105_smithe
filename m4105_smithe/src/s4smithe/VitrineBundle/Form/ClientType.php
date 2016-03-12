<?php

	namespace s4smithe\VitrineBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;

	class ClientType extends AbstractType {

		/**
		 * @param FormBuilderInterface $builder
		 * @param array                $options
		 */
		public function buildForm( FormBuilderInterface $builder, array $options ) {
			$builder
				->add( 'name', null, array( 'label' => 'Nom' ) )
				->add( 'password', 'password', array( 'label' => 'Mot de passe' ) )
				->add( 'mail', 'email', array( 'label' => 'E-mail' ) )
				->add( 'address', null, array( 'label' => 'Adresse' ) )
				->add( 'tel', null, array( 'label' => 'Téléphone' ) )
				->add( 'dateBirthday', 'birthday', array( 'label' => 'Date d\'anniverssaire' ) );
		}

		/**
		 * @param OptionsResolver $resolver
		 */
		public function configureOptions( OptionsResolver $resolver ) {
			$resolver->setDefaults(
				array(
					'data_class' => 's4smithe\VitrineBundle\Entity\Client'
				)
			);
		}

	}
	