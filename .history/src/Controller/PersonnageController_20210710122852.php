<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        Personnage::creerPersonnage();
        // ou les mettre sous forme de tableau assoc. $players ["j1" => $joueur1, "j2" => $joueur2,"j3" => $joueur3]
        return $this->render('personnage/persos.html.twig', [
            "persooos" => Personnage::$pers
        ]);
    }

    /**
     * @Route("/persos/{name}", name="afficher_personnage")
     */
    public function afficherPerso($name): Response
    {
        Personnage::creerPersonnage(); // On recrée la liste des personages qui a été supprimeé lors du rafraichissement de la page
        $pers = Personnage::getPersonnageParNom($name); 
        // créer une fonction statique pour récupérer un personnage spécifique
        // Dans la fonction creerPersonnage() on n'avait pas besoin d'un return
        // pour afficher juste le nom on a utilisé le {name} de la route et ça asuffit pour le rendu "return $this->render('personnage/perso.html.twig', [
            "nammame" => $name
        return $this->render('personnage/perso.html.twig', [
            "nammame" => $pers.name
        ]);
    }
}
