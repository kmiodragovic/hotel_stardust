<?php

namespace App\Controller;

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
    * @Route("/rooms", name="app_rooms")
    */
    public function rooms(CategoryRepository $categoryRepository):Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('hotel/rooms.html.twig',[
            'categories' => $categories,
        ]);
    }

    /**
    * @Route("/rooms/{id}", name="app_room")
    */
    public function room(Category $category):Response
    {
        return $this->render('hotel/room.html.twig',[
            'rooms' => $category->getRooms(),
            'category' => $category
        ]);
    }

}
