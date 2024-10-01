<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index()
    {
        // return new Response('Hello World');
        return $this->render('index.html.twig');
    }



    #[Route('discover', name:'discover')]
    public function discover(){
        return $this->render('movie/discover.html.twig');
    }

    #[Route('list', name:'list')]
    public function list(){
        return $this->render('movie/lists.html.twig');
    }


    // #[Route('movie', name:'movie')]
    // public function movie(){
    //     return $this->render('movie/movie.html.twig');
    // }
}