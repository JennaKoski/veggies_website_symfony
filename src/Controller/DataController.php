<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('data/index.html.twig');
    }

    #[Route('/favoriteVeggies', name: 'favoriteVeggies')]
    public function favoriteVeggies(): Response
    {
        $vegetables = ['🫒 Olives','🥒 Cucumber','🌶 Chili','🫑 Paprika','🍆 Eggplant','🧅 Onion','🥦 Broccoli','🧄 Garlic'];


        return $this->render('data/favoriteVeggies.html.twig', ['veggies'=>$vegetables]);
    }

    #[Route('/hateVeggies', name: 'hateVeggies')]
    public function hateVeggies(): Response
    {
        $vegetables = ['🌽 Corn','🥔 Potato','🥕 Carrot','🥬 Lettuce'];


        return $this->render('data/hateVeggies.html.twig', ['veggies'=>$vegetables]);
    }
}
