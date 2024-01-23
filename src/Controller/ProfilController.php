<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profil", name="profile_")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="index_profil")
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
