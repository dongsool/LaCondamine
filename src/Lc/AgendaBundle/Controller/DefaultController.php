<?php

namespace Lc\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LcAgendaBundle:Default:index.html.twig');
    }
}
