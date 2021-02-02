<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonController extends AbstractController
{
    /**
     * @Route("/mon", name="mon")
     */
    public function index(): Response
    {
        return $this->render('mon/index.html.twig', [
            'controller_name' => 'MonController',
        ]);
    }

    /**
     * @Route("/utilisateur", name="utilisateur")
     */
    public function utilisateur(): Response
    {
        return $this->render('mon/utilisateur.html.twig', [
            'controller_name' => 'MonController',
        ]);
    }

}

