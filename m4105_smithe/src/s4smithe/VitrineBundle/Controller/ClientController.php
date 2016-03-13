<?php

	namespace s4smithe\VitrineBundle\Controller;

	use s4smithe\VitrineBundle\Entity\Client;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Client controller.
	 *
	 * Class ClientController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class ClientController extends Controller {

		/**
		 * Lists all Client entities.
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$clients = $em->getRepository( 's4smitheVitrineBundle:Client' )->findAll();

			return $this->render(
				'client/index.html.twig',
				array(
					'clients' => $clients,
				)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function listeCommandeAction() {
			$user = $this->findUser( $this->getSessionUser() );

			return $this->render(
				's4smitheVitrineBundle:Client:listeCommande.html.twig',
				array(
					'commandes' => $user->getCommandes()
				)
			);
		}


		/**
		 * @param $id
		 *
		 * @return Client
		 */
		private function findUser( $id ) {
			$user = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Client' )
				->findOneById( $id );

			if ( !$user ) {
				$user = new Client();
				$user->setName( 'Inconus' );
			}

			return $user;
		}
		
		/**
		 * @return mixed
		 */
		private function getSessionUser() {
			$session = $this->getRequest()->getSession();

			return $session->get( 'userId', '-1' );
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function userInfoHeaderAction() {
			$sessionUser = $this->getSessionUser();
			$user = $this->findUser( $sessionUser );
			$userConnected = ( $sessionUser >= 0 ) ? true : false;

			return $this->render(
				's4smitheVitrineBundle:Client:userInfo.html.twig',
				array(
					'userConnected' => $userConnected,
					'pseudo'        => $user->getName()
				)
			);
		}

		/**
		 * Creates a new Client entity.
		 *
		 * @param Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
		 */
		public function newAction( Request $request ) {
			$client = new Client();
			$form = $this->createForm( 's4smithe\VitrineBundle\Form\Type\ClientType', $client );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $client );
				$em->flush();

				$this->setSessionUser( $client->getId() );

				return $this->redirectToRoute(
					's4smithe_vitrine_homepage'
				);

			}

			return $this->render(
				's4smitheVitrineBundle:Client:register.html.twig',
				array(
					'client' => $client,
					'form'   => $form->createView()
				)
			);
		}

		/**
		 * @param $userId
		 */
		private function setSessionUser( $userId ) {
			$session = $this->getRequest()->getSession();
			$session->set( 'userId', $userId );
		}

		/**
		 * Creates a new Client entity.
		 *
		 * @param Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
		 */
		public function loginAction( Request $request ) {
			$client = new Client();

			$form = $this->get( 'form.factory' )->createBuilder( 'form', $client )
				->add( 'mail', 'email', array( 'label' => 'E-mail' ) )
				->add( 'password', 'password', array( 'label' => 'Mot de passe' ) )
				->getForm();

			$form->handleRequest( $request );

			if( $form->isSubmitted() ){
				$user = $this->getDoctrine()->getManager()
					->getRepository( 's4smitheVitrineBundle:Client' )
					->findOneBy(
						array(
							'mail'     => $client->getMail(),
							'password' => $client->getPassword()
						)
					);

				if ( !$user ) {
					throw $this->createNotFoundException(
						'Utilisateur non reconnus ' . $user->getName()
					);
				}

				$this->setSessionUser( $user->getId() );

				return $this->redirectToRoute( 's4smithe_vitrine_homepage' );
			}

			return $this->render(
				's4smitheVitrineBundle:Client:login.html.twig',
				array(
					'name'   => 'Authentification',
					'client' => $client,
					'form'   => $form->createView(),
				)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function logoutAction() {
			$this->setSessionUser( -1 );

			return $this->redirectToRoute( 's4smithe_vitrine_homepage' );
		}

		/**
		 * Finds and displays a Client entity.
		 *
		 * @param Client $client
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function showAction( Client $client ) {
			$deleteForm = $this->createDeleteForm( $client );

			return $this->render(
				'client/show.html.twig',
				array(
					'client'      => $client,
					'delete_form' => $deleteForm->createView(),
				)
			);
		}

		/**
		 * Creates a form to delete a Client entity.
		 *
		 * @param Client $client The Client entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm( Client $client ) {
			return $this->createFormBuilder()
				->setAction( $this->generateUrl( 'client_delete', array( 'id' => $client->getId() ) ) )
				->setMethod( 'DELETE' )
				->getForm();
		}
		
		/**
		 * Displays a form to edit an existing Client entity.
		 *
		 * @param Request $request
		 * @param Client  $client
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
		 */
		public function editAction( Request $request, Client $client ) {
			$deleteForm = $this->createDeleteForm( $client );
			$editForm = $this->createForm( 's4smithe\VitrineBundle\Form\Type\ClientType', $client );
			$editForm->handleRequest( $request );

			if ( $editForm->isSubmitted() && $editForm->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $client );
				$em->flush();

				return $this->redirectToRoute( 'client_edit', array( 'id' => $client->getId() ) );
			}

			return $this->render(
				'client/edit.html.twig',
				array(
					'client'      => $client,
					'edit_form'   => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
				)
			);
		}
		
		/**
		 * Deletes a Client entity.
		 *
		 * @param Request $request
		 * @param Client  $client
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function deleteAction( Request $request, Client $client ) {
			$form = $this->createDeleteForm( $client );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->remove( $client );
				$em->flush();
			}

			return $this->redirectToRoute( 'client_index' );
		}
	}
