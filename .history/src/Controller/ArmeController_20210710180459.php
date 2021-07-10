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
    public function creerArme(): Response
    {
        return $this->render('arme/armes.html.twig', [
            "armes" => $armes
        ]);
    }
}