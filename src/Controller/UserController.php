<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/room", name="app_room")
     */
    public function room():Response
    {
        return $this->render('user/index.html.twig',[
        ]);
    }

    /**
     * @Route("/user/rooms/reservation", name="app_reservation")
     */
    public function reservation():Response
    {
        return $this->render('user/reservation.html.twig');
    }

}
