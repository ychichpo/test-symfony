<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class YoyoController extends AbstractController
{

    #[Route('/yoyo/{toto}', name: 'app_yoyo')]

    public function index($toto): Response
    {
        return $this->render('home/yoyo.html.twig', [

            'totoindex'=>$toto,

        ]);
    }


}