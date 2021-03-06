<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{

    /**
     * @Route("/armes", name="armes")
     */
    public function index2(): Response
    {
        return $this->render('arme/index.html.twig', [
            'controller_name' => 'ArmeController',
        ]);
    }
}
