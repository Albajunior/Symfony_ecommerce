<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 /**
 * @Route("/category", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/{slug}", name="liste")
     */
    public function list(Categories $category): Response
    {

        //on va chercher les produits de la categiry 
        $products = $category->getProducts();
        return $this->render('category/listeCat.html.twig', compact('category', 'products'));
    }
}
