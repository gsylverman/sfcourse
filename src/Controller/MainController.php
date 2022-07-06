<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        phpinfo();
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/custom/{id?}", name="custom")
     */
    public function customFunction(Request $request): Response
    {

        dump($request->get('id'));
        return $this->render('home/custom.html.twig', [
        'name' => $request->get('id')
        ]);
    }
}
