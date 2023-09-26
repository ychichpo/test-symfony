<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    #[Route('/lucky', name: 'app_lucky')]
    public function number(): Response
    {
       // $number = random_int(0, $max);

      /*  return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/
        return new Response(
            $this->render('home/home.html.twig')
        );
    }


}