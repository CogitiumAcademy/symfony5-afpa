<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
        /*
        return $this->json(['username' => 'jane.doe']);
        */
    }

    /**
     * @Route("/test/{id}", name="test_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    #[Route('/test/{id}', name: 'test_id', methods: ["GET"], requirements: ['id' => '\d+'])]
    public function test_id($id): Response
    {
        return $this->render('test/test.html.twig', [
            'controller_name' => 'Mon TestController avec id',
        ]);
    }

}
