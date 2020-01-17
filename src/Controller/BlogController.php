<?php

namespace App\Controller;

use App\Repository\MineralRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(MineralRepository $repository)
    {
        $mineraux = $repository->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'mineraux' => $mineraux
        ]);
    }

    /**
     * @Route("/", name="home")
     *
     * @return void
     */
    public function home(MineralRepository $repository)
    {
        $mineraux = $repository->findAll();
        return $this->render('blog/home.html.twig',[
            'mineraux' => $mineraux
        ]);
    }

    /**
     * @Route("/blog/le_bien", name="blog_show")
     */
    public function show()
    {
        return $this->render('blog/show.html.twig', [

        ]);
    }
}
