<?php

namespace App\Controller;

use App\Entity\Mineral;
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
     * @Route("/blog/{slug}-{id}", name="blog_show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Mineral $mineral
     */
    public function show(Mineral $mineral, $slug, $id)
    {
        if ($mineral->getSlug() != $slug){
            return $this->redirectToRoute('blog.show',[
                'id'=>$mineral->getId(),
                'slug'=>$mineral->getSlug()
            ], 301);
        }
        return $this->render('blog/show.html.twig', [
            'mineral'=>$mineral,
            'controller_name' => 'BlogController'
        ]);
    }
}
