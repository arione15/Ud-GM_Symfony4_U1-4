<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Arme;

class ArmeController extends AbstractController
{

    /**
     * @Route("/armes", name="lister_armes")
     */
    public function listerarmoos(): Response
    {
        Arme::creerArme();
        return $this->render('arme/armes.html.twig', [
            "armes" => Arme::$armesArray
        ]);
    }
    /**
     * @Route("/armes/{nam}", name="afficher_arme")
     */
    public function afficherArme(): Response
    {
        Arme::creerArme();
        $monArme = Arme::getArmByNom($nam);
        return $this->render('arme/arme.html.twig', [
            "armeee" => $monArme
        ]);
    }
}
