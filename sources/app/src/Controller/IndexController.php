<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{vueRouting}", name="index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', []);
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function redirectToHome(): Response
    {
        return $this->redirect('/home');
    }
}
