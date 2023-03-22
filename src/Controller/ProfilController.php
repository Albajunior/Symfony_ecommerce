<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="index")
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    /**
     * @Route("/commande", name="order")
     */
    public function orders(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'Profil de l\'user',
        ]);
    }
}
