<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PageController extends AbstractController
{
	/**
	 * @Route("/", name="home")
	 */
	public function index(Request $request, ContactNotification $notification): Response
	{
		$contact = new Contact();
		$form = $this->createForm(ContactType::class, $contact);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$notification->notify($contact);
			$this->addFlash('success', 'Merci pour votre message ! Il a bien été envoyé et je vous répondrai dans les plus brefs délais. ');

			return $this->redirectToRoute('home');
		}

		return $this->render('page/index.html.twig', [
			'controller_name' => 'PageController',
			'form' => $form->createView()
		]);
	}
}
