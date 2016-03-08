<?php

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use s4smithe\VitrineBundle\Entity\Client;
	use s4smithe\VitrineBundle\Form\ClientType;

	/**
	 * Client controller.
	 *
	 */
	class ClientController extends Controller {

		/**
		 * Lists all Client entities.
		 *
		 */
		public function indexAction() {
			$em = $this->getDoctrine()->getManager();

			$clients = $em->getRepository('s4smitheVitrineBundle:Client')->findAll();

			return $this->render('client/index.html.twig', array(
					'clients' => $clients,
			));
		}

		/**
		 * Creates a new Client entity.
		 *
		 */
		public function newAction(Request $request) {
			$client = new Client();
			$form = $this->createForm('s4smithe\VitrineBundle\Form\ClientType', $client);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($client);
				$em->flush();
				
				$session = $this->getRequest()->getSession();
				$session->set('userId', $client->getId());

				return $this->redirectToRoute('client_show', array('id' => $client->getId()));
			}

			return $this->render('s4smitheVitrineBundle:Client:register.html.twig', array(
					'name' => 'Inscripion',
					'client' => $client,
					'form' => $form->createView(),
			));
		}
		
		/**
		 * Creates a new Client entity.
		 *
		 */
		public function loginAction(Request $request) {
			$client = new Client();
			
			$form = $this->get('form.factory')->createBuilder('form', $client)
				->add('mail', 'email')
				->add('password', 'password')
				->getForm();
			
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$user = $this->getDoctrine()->getManager()
					->getRepository('s4smitheVitrineBundle:Client')
					->findOneBy(
						array(
							'mail' => $client->getMail(),
							'password' => $client->getPassword()
						)
					);

				if (!$user) {
					throw $this->createNotFoundException('Utilisateur non reconnus ' . $user->getName());
				}
				
				$session = $this->getRequest()->getSession();
				$session->set('userId', $user->getId());

				return $this->redirectToRoute('client_show', array('id' => $user->getId()));
			}

			return $this->render('s4smitheVitrineBundle:Client:login.html.twig', array(
					'name' => 'Authentification',
					'client' => $client,
					'form' => $form->createView(),
			));
		}

		/**
		 * Finds and displays a Client entity.
		 *
		 */
		public function showAction(Client $client) {
			$deleteForm = $this->createDeleteForm($client);

			return $this->render('client/show.html.twig', array(
					'client' => $client,
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Displays a form to edit an existing Client entity.
		 *
		 */
		public function editAction(Request $request, Client $client) {
			$deleteForm = $this->createDeleteForm($client);
			$editForm = $this->createForm('s4smithe\VitrineBundle\Form\ClientType', $client);
			$editForm->handleRequest($request);

			if ($editForm->isSubmitted() && $editForm->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($client);
				$em->flush();

				return $this->redirectToRoute('client_edit', array('id' => $client->getId()));
			}

			return $this->render('client/edit.html.twig', array(
					'client' => $client,
					'edit_form' => $editForm->createView(),
					'delete_form' => $deleteForm->createView(),
			));
		}

		/**
		 * Deletes a Client entity.
		 *
		 */
		public function deleteAction(Request $request, Client $client) {
			$form = $this->createDeleteForm($client);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->remove($client);
				$em->flush();
			}

			return $this->redirectToRoute('client_index');
		}

		/**
		 * Creates a form to delete a Client entity.
		 *
		 * @param Client $client The Client entity
		 *
		 * @return \Symfony\Component\Form\Form The form
		 */
		private function createDeleteForm(Client $client) {
			return $this->createFormBuilder()
					->setAction($this->generateUrl('client_delete', array('id' => $client->getId())))
					->setMethod('DELETE')
					->getForm()
			;
		}

	}
	