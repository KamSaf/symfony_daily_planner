<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PlannerController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $template = 'welcome.html.twig';
        $parameters = [];

        if ($this->getUser()){
            $template = 'planner/index.html.twig';
            $parameters = [];
        }

        return $this->render(
            view: $template,
            parameters: $parameters,
        );
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}
