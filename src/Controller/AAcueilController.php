<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AAcueilController extends AbstractController
{
    /**
     * @Route("/acueil", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('a_acueil/index.html.twig', [
            'controller_name' => 'AAcueilController',
        ]);
    }
}
