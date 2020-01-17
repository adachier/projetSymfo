<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     *
     * @return void
     */
    public function home()
    {
        return $this->render('blog/home.html.twig',[

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