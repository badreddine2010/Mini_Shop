<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecondProjectController extends AbstractController
{
   /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepo): Response
    {
        $products = $productRepo->findAll();
        // dd($articles); //dump and die
        return $this->render('second_project/index.html.twig', [
            'products' => $products,
        ]);
    }
}
