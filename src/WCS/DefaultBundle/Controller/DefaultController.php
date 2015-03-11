<?php

namespace WCS\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $themes = $em->getRepository('WCSDefaultBundle:Theme')->findAll();
        return $this->render('WCSDefaultBundle:Default:index.html.twig',array(
            'themes' => $themes
        ));
    }

    public function navbarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $themes = $em->getRepository('WCSDefaultBundle:Theme')->findAll();
        return $this->render('WCSDefaultBundle:Default:navbar.html.twig',array(
            'themes' => $themes
        ));
    }
}


