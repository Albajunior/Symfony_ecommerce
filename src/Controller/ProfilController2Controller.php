<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController2Controller extends AbstractController
{
    /**
     * @Route("/profil/controller2", name="app_profil_controller2")
     */
    public function index(): Response
    {
        return $this->render('profil_controller2/index.html.twig', [
            'controller_name' => 'ProfilController2Controller',
        ]);
    }
}
