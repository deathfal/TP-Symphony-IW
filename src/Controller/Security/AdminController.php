<?php 

declare(strict_types= 1);

namespace App\Controller\Security;  

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/admin', name: 'admin_')]
Class AdminController extends AbstractController {
    #[Route('/', name: 'main')]
    public function index(Request $request): Response {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/admin_films', name:'admin_films')]
    public function adminFilms(Request $request): Response {
        return $this->render('admin/admin_films.html.twig');
    }


    #[Route('/add_films', name:'addfilms')]
    public function create(Request $request): Response {
        return $this->render('admin/admin_addfilms.html.twig');
    }

    #[Route('/admin_users', name:'admin_users')]
    public function users(Request $request): Response {
        return $this->render('admin/admin_users.html.twig');
    }



}
