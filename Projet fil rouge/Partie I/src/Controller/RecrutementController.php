<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecrutementController extends AbstractController
{
    #[Route('/recrutement', name: 'recrutement')]
    public function index(): Response
    {
        return $this->render('user/recrutement.html.twig', [
            'controller_name' => 'RecrutementController',
        ]);
    }
}
