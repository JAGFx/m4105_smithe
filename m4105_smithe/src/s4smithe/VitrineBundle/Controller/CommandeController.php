<?php

	namespace s4smithe\VitrineBundle\Controller;

	use s4smithe\VitrineBundle\Entity\Client;
	use s4smithe\VitrineBundle\Entity\Commande;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Commande controller.
	 *
	 */
	class CommandeController extends Controller {

		/**
		 * Lists all Commande entities.
		 *
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$commandes = $em->getRepository( 's4smitheVitrineBundle:Commande' )->findAll();

			return $this->render(
				's4smitheVitrineBundle:Commande:index.html.twig', array(
					'commandes' => $commandes,
				)
			);
		}

		/**
		 * Creates a new Commande entity.
		 *
		 */
		public function newAction( Request $request ) {
			$commande = new Commande();

			$form = $this->createForm( 's4smithe\VitrineBundle\Form\Type\CommandeType', $commande );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $commande );
				$em->flush();

				return $this->redirectToRoute( 'commande_show', array( 'id' => $commande->getId() ) );
			}

			return $this->render(
				'commande/new.html.twig', array(
					'commande' => $commande,
					'form'     => $form->createView(),
				)
			);
		}

		/**
		 * Finds and displays a Commande entity.
		 *
		 */
		public function showAction( Commande $commande ) {
			$deleteForm = $this->createDeleteForm( $commande );

			return $this->render(
				's4smitheVitrineBundle:Commande:show.html.twig', array(
					'commande'    => $commande,
					'delete_form' => $deleteForm->createView(),
				)
			);
		}

		/**
		 * @param Commande $commande
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
		 */
		public function detailAction( Commande $commande ) {
			if ( $commande->getClient()->getId() !== $this->getSessionUser() ) {
				return $this->redirectToRoute( "s4smithe_vitrine_homepage" );
			}

			return $this->showAction( $commande );
		}

		/**
		 * Displays a form to edit an existing Commande entity.
		 *
		 */
		public function editAction( Request $request, Commande $commande ) {


			$editForm = $this->createFormBuilder( $commande )
				->add( 'date', 'datetime', array( 'read_only' => true, 'disabled' => true ) )
				->add( 'etat' )
				->add( 'client', null, array( 'read_only' => true, 'disabled' => true ) )
				->getForm();

			//$editForm = $this->createForm( 's4smithe\VitrineBundle\Form\Type\CommandeType', $commande );
			$editForm->handleRequest( $request );

			if ( $editForm->isSubmitted() && $editForm->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $commande );
				$em->flush();

				return $this->redirectToRoute( 'commande_edit', array( 'id' => $commande->getId() ) );
			}

			return $this->render(
				's4smitheVitrineBundle:Commande:edit.html.twig', array(
					'commande'    => $commande,
					'edit_form'   => $editForm->createView(),
				)
			);
		}

		/**
		 * Deletes a Commande entity.
		 *
		 */
		public function deleteAction( Request $request, Commande $commande ) {
			$form = $this->createDeleteForm( $commande );
			$form->handleRequest( $request );

			if ( $form->isSubmitted() && $form->isValid() ) {
				$em = $this->getDoctrine()->getManager();
				$em->remove( $commande );
				$em->flush();
			}

			return $this->redirectToRoute( 'commande_index' );
		}

		/**
		 * Creates a form to delete a Commande entity.
		 *
		 * @param Commande $commande The Commande entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm( Commande $commande ) {
			return $this->createFormBuilder()
				->setAction(
					$this->generateUrl( 'commande_delete', array( 'id' => $commande->getId() ) )
				)
				->setMethod( 'DELETE' )
				->getForm();
		}


		/**
		 * @return int
		 */
		private function getSessionUser() {
			$session = $this->getRequest()->getSession();

			return $session->get( 'userId', -1 );
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

	}
