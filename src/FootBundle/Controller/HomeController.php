<?php

namespace FootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    /**
     * @Route("/",name="homepage")
     */
    public function homeAction()
    {
//        $user = $this->container->get('security.context')->getToken()->getUser();
//        $message = \Swift_Message::newInstance()
//        ->setSubject('Bienvenue à EACCWB')
//        ->setFrom('lemoine.ste@free.fr')
//        ->setTo($user->getEmail())
//        ->setBody($this->renderView('FootBundle:Home:accueil.txt.twig', array('name' => $user->getPrenom().' '.$user->getNom() )));
        //$this->get('mailer')->send($message);
        if($this->get('security.context')->isGranted('ROLE_USER')){
            $equipes = $this->container->get('security.context')->getToken()->getUser()->getClub()->getEquipes();
            return $this->render('Appli\Home\index.html.twig',array('equipes' => $equipes));
        }
        return $this->render('Appli\Home\anonymus.html.twig');
    }
    /**
     * @Route("/ml",name="ml")
     */
    public function mlAction()
    {
        return $this->render('::Appli\Ml\index.html.twig');
    }
}
