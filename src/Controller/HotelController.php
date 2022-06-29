<?php

namespace App\Controller;

use App\Entity\Kamer;
use App\Repository\KamerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{
    /**
     * @Route("/", name="app_hotel")
     */
    public function index(): Response
    {
        return $this->render('hotel/index.html.twig', [
            'controller_name' => 'HotelController',
        ]);
    }

    /**
     * @Route("/reserveren", name="app_reserveren")
     */
    public function reserveren(KamerRepository $kamerRepository)
    {
        $kamer = $kamerRepository->findAll();
        return $this->render('user/index.html.twig', [
            'kamer' => $kamer

        ]);
    }

}
