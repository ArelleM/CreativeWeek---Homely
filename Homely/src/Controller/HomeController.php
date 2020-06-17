<?php

namespace App\Controller;

use App\Repository\OfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     *
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');

    }

    /**
     * @Route("/locations", name="locations")
     * @return Response
     *
     */
    public function location(): Response
    {
        return $this->render('pages/location.html.twig');

    }
}