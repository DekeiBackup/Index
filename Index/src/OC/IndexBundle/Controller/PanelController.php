<?php

namespace OC\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanelController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCIndexBundle:Panel:index.html.twig');
    }
}
