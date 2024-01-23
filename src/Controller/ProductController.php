<?php

namespace App\Controller;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product", name="app_product")
*/
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }

    /**
     * @Route("/{slug}", name="details")
     */
    public function details(Products $products): Response
    {
       // dd($products->getName()); c un debeg, affiche tt les detais ...
        return $this->render('product/details.html.twig', compact('products'));
    }
}
