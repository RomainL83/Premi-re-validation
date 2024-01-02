<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonController extends AbstractController
{
    #[Route('/ma-premiere-page', name: 'ma_premiere_page')]
    public function maPremierePage(): Response
    {
        return $this->render('mon_template.html.twig');
    }
}
