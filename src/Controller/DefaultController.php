<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function index(Request $request)
    {
        $manager = $this->getDoctrine()->getManager();

        return $this->render('base.html.twig');
    }
}
