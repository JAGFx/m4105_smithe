<?php

	/*
	 * Fichier : ClientLoginType.php
	 * Auteur: SMITH Emmanuel
	 * Création: 20/03/2016
	 * Modification: 22/03/2016
	 *
	 * Form builder pour l'entitée Client. Uniquement pour la connexion à un compte
	 */

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
