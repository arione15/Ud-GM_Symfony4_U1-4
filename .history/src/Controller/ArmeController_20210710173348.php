<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }


    /**
     * @Route("/arme", name="arme")
     */
    public function index2(): Response
    {
        return $this->render('arme/index.html.twig', [
            'controller_name' => 'ArmeController',
        ]);
    }
}
