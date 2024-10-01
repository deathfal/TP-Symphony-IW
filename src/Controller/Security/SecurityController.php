<?php 

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController {

    #[Route(path:"/login", name:"login")]
    public function login(Request $request) {
        return $this->render("auth/login.html.twig");
    }
    
}
