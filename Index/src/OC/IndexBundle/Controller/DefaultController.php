<?php

namespace OC\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCIndexBundle:Redirect:index.html.twig');
    }
}
