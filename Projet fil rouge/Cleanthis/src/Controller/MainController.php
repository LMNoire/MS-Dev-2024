<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale($locale, Request $request): Response
    {
        //Stocker la langue demandée dans la session
        $request->getSession()->set('_locale', $locale); //TODO:
        //Revenir sur la page
        return $this->redirect($request->headers->get('referer'));
    }
}
