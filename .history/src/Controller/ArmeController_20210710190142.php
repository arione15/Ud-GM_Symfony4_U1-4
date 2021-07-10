<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Arme;

class ArmeController extends AbstractController
{

    /**
     * @Route("/armes", name="armes")
     */
    public function armoocreerArme(): Response
    {
        Arme::creerArme();
        return $this->render('arme/armes.html.twig', [
            "armes" => Arme::$armesArray
        ]);
    }
}
