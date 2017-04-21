<?php

namespace AppBundle\Controller;

use AppBundle\Form\NewsletterSubscriberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterSubscriberController extends Controller
{


    public function createNewsletterFormAction(Request $request)
    {
        $form = $this->createNewsletterForm();

        return $this->render('::include/_form_newsletter.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    private function createNewsletterForm(){
        return $this->createForm(NewsletterSubscriberType::class, null, [
            'action' => $this->generateUrl('app_newsletter_subscriber_subscribe'),
        ]);
    }



    /**
     * @Route("/subscribe-newsletter", name="app_newsletter_subscriber_subscribe")
     */
    public function subscribeNewsletterAction(Request $request)
    {
        $form = $this->createNewsletterForm();

        $form->submit($request->request->get($form->getName()));

        if($form->isValid() && $form->isSubmitted()){
            $newsletterSubscriber = $form->getData();

            if(null !== $this->getUser()){
                $newsletterSubscriber->setUser($this->getUser());
            }

            $this->container->get('app.newsletter_subscriber_manager')->save($newsletterSubscriber);

            $this->get('session')->getFlashBag()->add('info', 'L\'email a bien été ajouté à la liste pour les newsletter!');
            return $this->redirectToRoute('app_homepage');
        }

        return $this->redirectToRoute('app_homepage');

    }





}
